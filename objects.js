const planet={
    name:"earth",
    shap:"elliptical",
    radius:6300
}
let arr=[1,22,333,4444]
let word="hello"
/* for in loop is usefull to iterate over properties of iterable and user-defined-objects "retunrs property" */
for(let index in arr){
    console.log(index+" number");
    }
for(let key in planet){
    console.log(key+" name")
}
for(let alind in word){
    console.log(alind+" position")
}
console.log("\n")
//for of loop os usefull for iterable objects(string,array)//
for(let letter of word){
    console.log(letter)
}
for(let val of arr){
    console.log(val)
}