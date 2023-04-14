const fs = require('fs')
function jsonReader(filepath, cb){
    fs.readFile(filepath, (err, fileData)=>{
        if(err){
            return cb && cb(err);
        }
        try{
            const obj = JSON.parse(fileData);
            return cb && cb(null, obj);            
        } catch (err){
            return cb && cb(err);
        }
    });
}

const rawData = fs.readFileSync('students.json', {encoding:'utf-8'});
const data = JSON.parse(rawData);
console.log(data);

let t = {
    "MaSV": "21661069",
    "HoTen": "Trần Phạm Tuấn Anh",
    "Lop": "17CSI01",
    "GioiTinh": "Nam",
    "NgaySinh": "06/10/2003"
};
data.push(t);
fs.writeFileSync('lst.json', JSON.stringify(data) ,{encoding:'utf-8'});
fs.writeFile('students.json',JSON.stringify(data),err=>{
    if(err){
        console.log(err);
    }
    else{
        console.log("OK");
    }
});
