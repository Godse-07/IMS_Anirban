
 <!DOCTYPE html>
<html>
<head>
    <style>
        /* Your CSS styles for the header here */ 
        *{
    margin:0;
    padding:0;
    font-family: sans-serif;
}
.hero{
    height: 100%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(backgroundimg.jpg);
    background-position: center;
    background-size: cover;
    position: absolute;
}
.form-box{
    width: 380px;
    height: 570px;
    position: relative;
    margin: 6% auto;
    background:white;
    padding: 10px;
    overflow: hidden;
}
.button-box
{
    width: 220px; ;
    margin: 35px auto;
    position: relative;
    box-shadow:0 0 20px 9px #6e07751f ;
    border-radius: 30px; 
}
.toggle-btn
{
    padding: 10px 30px;
    cursor:pointer ;
    background:transparent ;
    border:0 ;
    outline:none ;
    position: relative;
}
#btn{
    top:0;
    left: 0;
    position:absolute ;
    width: 110px;
    height: 100%;
    background: linear-gradient(to right,#ff105f,#ffad06);
    border-radius: 30px;
    transition: .5s;
}
.input-group{
    top:180px;
    position:absolute;
    width:280px;
    transition:.5s;
}
.input-field{
    width:100%;
    padding:10px 0;
    margin:5px 0;
    border-left: 0;
    border-top: 0;
    border-right:0 ;
    border-bottom:1 px solid #999 ;
    outline: none;
    background: transparent;
}
.submit-btn{
    width:85%;
    padding:10px 30px;
    cursor: pointer;
    display: block;
    margin:auto;
    outline: none;
    background: linear-gradient(to right,#ff105f,#ffad06);
    border: 0;
    border-radius: 30px;

}
.check-box{
    margin: 30px 10px 30px 0;
}
span{
    color: #777;
    font-size: 12px;
    bottom: 68px;
    position: absolute;
}
#login{
    left:50px;
}
#register{
 left:450px;
}
    </style>
</head>
<body>
