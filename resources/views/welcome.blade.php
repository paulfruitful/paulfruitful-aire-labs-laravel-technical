<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel Technical Assessment</title>
         @livewireStyles
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400&display=swap">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Styles -->
        <style>
           @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap');

        .gradient-left{
            width: 415.31px; 
            height: 416.47px;
             left: 235.30px; 
             top:50vh; 
             position: absolute; 
             transform: rotate(88.35deg); 
             transform-origin: 0 0; 
             background: linear-gradient(149deg, #F82C2C 0%, #EC874E 22%, #E78B20 39%, #6C3DF4 56%, #FF2633 77%, #FF1818 100%); 
             box-shadow: 164px 164px 164px; 
             filter: blur(164px)}
        
        .gradient-right{
            width: 215.31px; 
            height: 216.47px; 
            left: 1465.56px; 
            top:100px; 
            position: absolute; 
            transform: rotate(88.35deg); 
            transform-origin: 0 0; 
            background: linear-gradient(149deg, #F82C2C 0%, #EC874E 22%, #E78B20 39%, #6C3DF4 56%, #FF2633 77%, #FF1818 100%); 
            box-shadow: 164px 164px 164px; 
            filter: blur(154px)}
        body{
            display: flex;
            flex-direction: column;
            position: relative; 
            background: #FFF1E8; 
            overflow-x: hidden;
            overflow: hidden;
        }

        #card-holder{
            display:flex;
            flex-direction:row;
            flex-wrap: wrap;
            left: 135px; 
            top: 264px; 
            width: 370px;
             height: 221px; 
             justify-content:space-between;
             z-index: 1;
            position: relative;
       
        }

        .star{
            width: 96px; 
            height: 16px;
             position: relative;
        }

        .card{
            position: relative;
            display: flex;
            flex-direction: column;
             margin:0px 12px 0px -3px;
            background: white;
             border: 1px #313030 solid;
             box-shadow: 1px 1px #FFF1E8;
             z-index: 2;
             padding: 16px;
        }
      .text{
        width: 310px;
        color: rgba(17, 17, 17, 0.80);
        font-size: 16px;
        font-family: "DM Sans";
        font-weight: 400;
        line-height: 26px;
        word-wrap: break-word;
        padding: 16px;
}
        .image{
            width: 43px; 
            height: 43px; 
            border-radius: 9999px;
            padding:12px;
        }
        .name{
            padding:22px 12px 0px 0px;
            color: #111111; 
            font-size: 16px;
            font-family: Space Grotesk; 
            font-weight: 400; 
            line-height: 24px;
            word-wrap: break-word
            
             }

             .title{
                opacity: 0.70; 
                color: #111111; 
                font-size: 14px; 
                font-family: Inter; 
                font-weight: 400; 
                line-height: 20px; 
                word-wrap: break-word
             }

             .card-foot{
                display: flex;
                flex-direction: row;
             }

             .role{
                display: flex;
                flex-direction: column;
             }
        </style>
    </head>
    <body class="antialiased" style="background-color: #FFF1E8">
        
            <div class="gradient-right"></div>
            <div>
              <livewire:card-holder :data="$data"/>
            </div>
            
            <div class="gradient-left"></div>
            
                



          
    
          @livewireScripts        
        <body>
</html>
