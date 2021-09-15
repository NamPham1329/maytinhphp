var input=document.querySelector('.content');//chon phan tu co class content
var items=Array.from(document.querySelectorAll('.item')); //mang items gôm tat ca các phan tu co class items
items.forEach(function(btn){
    btn.addEventListener('click',function(){
        let domain = input.innerHTML+=btn.innerHTML;
        let current = document.getElementById('domain').getAttribute('value')
        if(current === null){
            document.getElementById('domain').setAttribute('value', "");
        } else {
            if(domain==="="){
                document.getElementById('domain').setAttribute('value', current);
            } else {
                if(current==="AC"||domain==="AC"){
                    document.getElementById('domain').setAttribute('value', "");
                } else {
                    document.getElementById('domain').setAttribute('value', current+domain); 
                }
            }

        }
        
    })
})
