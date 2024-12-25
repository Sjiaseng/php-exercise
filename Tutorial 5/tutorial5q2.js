function tab(){
    document.getElementById("tab1").onclick= function(){
        document.getElementById('content1').style.display = 'block';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'none';
    }
    document.getElementById("tab2").onclick= function(){
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'block';
        document.getElementById('content3').style.display = 'none'
    }
    document.getElementById("tab3").onclick=function(){
        document.getElementById('content1').style.display = 'none';
        document.getElementById('content2').style.display = 'none';
        document.getElementById('content3').style.display = 'block';
    }
}