const counters=document.querySelectorAll('.counter');

counters.forEach(counter=>{

const update=()=>{

const target=+counter.getAttribute('data-target');

const count=+counter.innerText;

const increment=target/150;

if(count<target){

counter.innerText=Math.ceil(count+increment);

setTimeout(update,15);

}else{

counter.innerText=target.toLocaleString();

}

}

update();

});