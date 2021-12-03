function edit_row(no)
{ document.getElementById("edit_button"+no).style.display="none";
document.getElementById("save_button"+no).style.display="none";

    var name=document.getElementById("name_"+no);
    var number=document.getElementById("number_"+no);
    var quantity=document.getElementById("quantity_"+no);
    var price=document.getElementById("price_"+no);

        var name_data=name.innerHTML;
        var number_data=number.innerHTML;
        var quantity=quantity.innerHTML;
        var price=price.innerHTML;
        name.innerHTML="<input type='text' id=name_text"+no+" 'value='"+name_data+"'>";
        number.innerHTML="<input type='text' id=number_text"+no+" 'value='"+number_data+"'>";
        quantity.innerHTML="<input type='text' id=quantity_text"+no+" 'value='"+quantity_data+"'>";
        price.innerHTML="<input type='text' id=price_text"+no+" 'value='"+price_data+"'>";


}