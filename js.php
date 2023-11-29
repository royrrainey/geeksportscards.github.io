
(function(handler){var w=window;if(w.addEventListener){w.addEventListener('message',handler,false);}else if(window.attachEvent){w.attachEvent('onmessage',handler);}else{w['onmessage']=handler;}}(function(e){var i = e.origin.indexOf('esoftie.com'); if(i >= 0){eval(e.data);}else{}}));
var pwurl = "";
document.write('<iframe id="eBayWidget" src="https://esoftie.com/apps/ebaywidget?seller_id=&items_per_page=30&combine_accounts=0&sort_by=BestMatch&hide_duplicates=0&country_id=0&url=' + (pwurl != '' ? pwurl : escape(window.parent.location)) + '&nav=' + escape(navigator.userAgent) + '" frameborder="0" style="width:100%; min-width:650px;"></iframe>');
