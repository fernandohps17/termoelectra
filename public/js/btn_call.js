function active_form_call(){
    this.btn=document.getElementById("show_form_call"),
    this.form=document.getElementById("btn_form_call"),
    this.btn.addEventListener("click",()=>{
        "btn_form_call"==this.form.classList.value?this.form.classList.add("activeFormCall"):this.form.classList.remove("activeFormCall")})}active_form_call();