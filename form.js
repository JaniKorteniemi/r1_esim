function form_1(){
  console.log("Lomake lähetetty");
  var data="POST-data";
  var form=document.getElementById('formid_1');
  var fname=form.en.value;
  var lname=form.sn.value;
  data+="<br>Etunimi= "+fname;
  data+="<br>sukunimi= "+lname;
  document.getElementById('result').innerHTML=data;
}
