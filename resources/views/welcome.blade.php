

@extends('layouts.app')

@section('styles')
<style>
	.img-responsive {
    	margin: 0 auto;
	}
</style>
@endsection

@section('content')
<div class="panel panel-primary">
<div class="panel-heading">Sistema de gestión de incidencias</div>
    <div class="panel-body text-center">
        <img src="/images/welcome.png" alt="Sistema de gestión de incidencias" class="img-responsive">
    </div>

</div>
<script language="JavaScript" type="text/javascript">
    // Reloj digital para web javascript
    // Copyright 2015 bloguero-ec.
    // Usese cómo mas le convenga no elimine estas líneas (http://www.bloguero-ec.com)
    function show5(){
    if (!document.layers&&!document.all&&!document.getElementById)
    return

     var Digital=new Date()
     var hours=Digital.getHours()
     var minutes=Digital.getMinutes()
     var seconds=Digital.getSeconds()

    var dn="PM"
    if (hours<12)
    dn="AM"
    if (hours>12)
    hours=hours-12
    if (hours==0)
    hours=12

     if (minutes<=9)
     minutes="0"+minutes
     if (seconds<=9)
     seconds="0"+seconds
    //change font size here to your desire
    myclock="<b>Hora actual:   "+hours+":"+minutes+":"
     +seconds+" "+dn+"</b>"
    if (document.layers){
    document.layers.liveclock.document.write(myclock)
    document.layers.liveclock.document.close()
    }
    else if (document.all)
    liveclock.innerHTML=myclock
    else if (document.getElementById)
    document.getElementById("liveclock").innerHTML=myclock
    setTimeout("show5()",1000)
     }


    window.onload=show5

     </script>

<span id="liveclock" style="left:0;top:0; font-size:36px; font-family:'Lucida Sans'"></span>
@endsection
