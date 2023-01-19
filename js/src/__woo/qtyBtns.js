const $ = jQuery.noConflict();

class QtyBtns {
    constructor(){
        this.counter = 1;
    }
    valueUpdate(value){
        let qtyInput = document.getElementsByClassName('qty');
        qtyInput[0].value = value;
        console.log(qtyInput[0].value); 
    }

    addBtn(){
        this.counter += 1;
        this.valueUpdate(this.counter);
    }
    removeBtn(){ 
        if(this.counter === 1){
            return false;
        }else{
            this.counter -= 1;
        }  
        this.valueUpdate(this.counter);
    }
    btnHandler(){
        let qtyBtn = document.getElementsByClassName('qty-btn'); 

        for (let btn of qtyBtn) {
            btn.addEventListener('click', function(e){
                e.preventDefault();
                if(e.target.classList.contains('qty-btn__add')){
                    this.addBtn();
                }else{
                    this.removeBtn();
                }
            }.bind(this));
        }
       
    }
    init(){
        this.btnHandler();
    }
}

export default new QtyBtns();
 