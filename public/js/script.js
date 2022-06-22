async function _get(path){
    const data = await fetch(path).then( res => res.json() );
    return data;
};

let page = document.querySelector("section").id;
{
    page === 'morePage' ? morePageFn() : 
    page === 'mainPage' ? mainPageFn() :
    '';
};

function morePageFn(){
    const $goodChkBox = document.querySelector("input#good");
    const $goodEl = document.querySelector(".goodSpan");
    $goodChkBox.addEventListener("input", function(){
        $goodEl.innerText = this.checked ? +$goodEl.innerText+1 : $goodEl.innerText-1;
        let idx = document.querySelector("section").dataset.idx;        console.log(idx);
        // let data = _get(`/item/good/${idx}`);
        // console.log(loginChk);
    });
}

function mainPageFn(){

}