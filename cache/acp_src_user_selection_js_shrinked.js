             function transferSelectedUser(comboID,selUserID,formID) {var str ='';var combo=document.getElementById(comboID); for(var i =0;i <combo.length;i++) str +=combo.options[i].value +',';document.getElementById(selUserID).value =str; document.getElementById(formID).submit(); }  function removeMarkedUser(comboID) {var rem =new Array(); var a=0;var combo=document.getElementById(comboID); for(var i =0;i <combo.length;i++) {	if(combo.options[i].selected) rem[a++] = i; }for(var i =rem.length -1;i >=0;i--) combo.options[rem[i]] =null; } function addUserToCombo(comboID,selectedUser) {var combo=document.getElementById(comboID); for(var id in selectedUser) {	if(typeof selectedUser[id] =='string'&&!_entryExists(combo,id)) {var newEntry =new Option(selectedUser[id],id,false,false); combo.options[combo.length] =newEntry; }}}  function _entryExists(combo,val) {for(var i =0;i <combo.length;i++) {	if(combo.options[i].value ==val) return true; }return false; }