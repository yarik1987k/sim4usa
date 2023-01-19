const $ = jQuery.noConflict();

class Cart {

    constructor() {
        this.items = [];
        this.totalPrice = 0;
    }

    addItem(item) {
        this.items.push(item);
        this.totalPrice += item.price;
    }

    removeItem(item) {
        const index = this.items.indexOf(item);
        this.items.splice(index, 1);
        this.totalPrice -= item.price;
    
    }
    updateTotalPrice() {
        this.totalPrice = 0; 
        this.items.forEach(item => {
          this.totalPrice += item.price;
        });
    }
     
    productButton(){
        
        const form = document.getElementsByClassName('cart'); 

        if(form != 'undefind'){

        
        const productId = form[0].getElementsByClassName('single_add_to_cart_button');
        const quantity = form[0].getElementsByClassName('qty');
        const productPrice = form[0].getElementsByClassName('product-price-field');
       
        productId[0].addEventListener('click', function(e){
           e.preventDefault();
           const totalPrice = parseInt(quantity[0].value) * parseInt(productPrice[0].value); 
            const itemObject = {
                id: productId[0].value,
                quanty: quantity[0].value,
                price: productPrice[0].value,
                totalProductPrice: totalPrice
            } 
            console.log(itemObject)
        })

        }
         
    }
    init(){ 
        this.productButton(); 
    }
}

export default new Cart();