        var ta_dragging =false; var ta_id; var ta_resizer_id;    function BS_set_textarea_ids(id,rid) {ta_id = id; ta_resizer_id =rid; }function BS_startDrag(ev) {	if(!ev) ev =window.event; var tar =FWS_getElement(ta_resizer_id); 	if(tar ==null) return; var evy =Browser.isIE ?ev.clientY +document.documentElement.scrollTop :ev.pageY; var tary =FWS_getPageOffsetTop(tar);  	if(evy >=tary -3&&evy <=tary +tar.offsetHeight +3)ta_dragging =true; }function BS_stopDrag(ev) {ta_dragging =false; } function BS_moveMouse(ev) {	if(!ev) ev =window.event; 	if(!ta_dragging) return; var ta =FWS_getElement(ta_id); var tar =FWS_getElement(ta_resizer_id); 	if(ta ==null ||tar ==null) return; var evy =Browser.isIE ?ev.clientY +document.documentElement.scrollTop :ev.pageY; var tay =FWS_getPageOffsetTop(ta); var newHeight =evy -tay -10;ta.style.height =newHeight +"px"; 	if(Browser.isIE) document.selection.clear(); }document.onmousedown =BS_startDrag; document.onmouseup =BS_stopDrag; document.onmousemove =BS_moveMouse;