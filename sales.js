 




var app = new Vue({
    el: '#myapp',
    data: {
      bought: {
        item:0,
        name:"",
        quantity:0,
        price:0,
        total:0

      },
      cartTotal:0,
      products: "",
      productid: 0,
      selectedProduct: 0,
      
      cart:[ ]
    },
    computed:{
      VAT: function(){
        return(
          ((3*this.cartTotal)/100)
        )
      },
      actualTotal: function(){
        return (this.cartTotal - this.VAT)
      },
      totalprice:function(){
        for (item in this.cart){
          console.log(this.cart);
          console.log(item);
          console.log(item.total);
          this.cartTotal= this.cartTotal + this.cart[item].total;
        }
        return (
         this.cartTotal
        )
      }
    },
    methods: {
      generateReceipt(){
        const doc= new jsPDF;
        doc.text("name \t price \t quantity \t total \n", 15,15);
        for (item in app.cart){
          doc.text(app.cart[item].name+ "\t" + app.cart[item].price + "\t" + app.cart[item].quantity +  "\t" + app.cart[item].total + "\n", 15, 15) 
        }
        // doc.text(JSON.stringify(app.cart), 15,15);
        doc.save("receipt.pdf");

      },
           
        SaveandReset(e){
            let val = e.target.value;
            console.log(val);

        },
        remove: function(name){
          app.cart.forEach(function(cartitem,index){
            if (cartitem.name == name){
              app.cart.splice(index,1);
            }
          })
          this.save();
        },
        addToCart(){
            app.cart.push({selectedProduct: app.bought.item,
               name: app.products[app.bought.item-1].name,
               quantity: app.bought.quantity,
                price: app.products[app.bought.item-1].price, 
                total:app.bought.quantity * app.products[app.bought.item-1].price});
                

            app.bought.item="";
            app.bought.name="";
            app.bought.quantity=0;
            app.bought.price=0;
            app.total=0;
            console.log(app.cart);
            app.save();

        },
        
        save(){
          localStorage.setItem("cart", JSON.stringify(this.cart));
        },
      allRecords: function(){
  
        axios.get('ajaxfile.php')
        .then(function (response) {
           app.products = response.data;
           console.log(response.data);
           
           console.log('got here');
        })
        .catch(function (error) {
           console.log(error);
        });
      },
      recordByID: function(){
        if(this.productid > 0){
   
          axios.get('ajaxfile.php', {
             params: {
               productid: this.id
             }
          })
          .then(function (response) {
             app.products = response.data;
          })
          .catch(function (error) {
             console.log(error);
          });
        }
      }
    },
    created: function(){
      bought=JSON.parse(localStorage.getItem("bought"));
      this.bought= bought?bought:[]
      
    }
  })