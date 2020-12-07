var canvas = new fabric.Canvas('canvas');
var can =document.getElementById('canvas')
// ------------------create new project (canvas)---------------------

 $('#create-canvas').click(function(){
    $('#divHabilitSelectors').remove()
    $('.canvas-cont').removeClass('hide')
    $('.bord-dotted').css({'width': 'max-content', 'height':'max-content'})

   canvas.isDrawingMode = false;
       
       var width=$('#width').val()
       var height=$('#height').val()
       if (width<=500 && height<=500){
        $('.error-message').addClass('hide')
          canvas.setDimensions({width:width, height:height})
          canvas.renderAll();
       }
       else{
         $('.bord-dotted').css({'height': '85px', 'width': '200px', 'padding': '12px'})
         $('.error-message').removeClass('hide')
         $('.error-message').html('wax width: 500px<br> max height: 500px')
       }
  
});

// --------------------upload image--------------------------------
var image
  document.getElementById('fileupload').addEventListener("input", function (e) {
    $('#divHabilitSelectors').remove()
    $('.canvas-cont').removeClass('hide')
    $('.bord-dotted').css({'width': 'max-content', 'height':'max-content'})

   canvas.isDrawingMode = false;

       var file = e.target.files[0];
       var reader = new FileReader();

   reader.onloadend = function (event) {
        image = new Image();
           image.src = event.target.result;

     image.onload = function() {
           var imgWidth=image.width
           var imgHeight=image.height
           var data = event.target.result;

           if (imgWidth > imgHeight) {
              if (imgWidth > 600) {
                imgHeight *= 500 / imgWidth;
                imgWidth = 500;
              }
            } 
            else {
              if (imgHeight > 450) {
                imgWidth *= 350 / imgHeight;
                imgHeight = 350;
              }
            }
    fabric.Image.fromURL(data, function (img) {
      var oImg = img.set({ left: 40, top: 40, angle: 00, id: 'backimage'}).scale(1);
      
          oImg.scaleToHeight(imgHeight);
          oImg.scaleToWidth(imgWidth);
                     
          canvas.add(oImg).renderAll();

        var a = canvas.setActiveObject(oImg);
        var dataURL = canvas.toDataURL({ format: 'png',});
 quality: 0.8});
    
canvas.setDimensions({width:imgWidth+80, height:imgHeight+160})
    };
  }
         
  reader.readAsDataURL(file);  
});
// ------------------add frames----------------------------------------
  var arr=document.getElementsByClassName('aa')
    for(var i=0; i<arr.length; i++){
         arr[i].addEventListener("click", addFrame)
    }

 var frame = new Image();
    var oImg1
 function addFrame(a){
   canvas.isDrawingMode = false;
  
     var src=this.src
     frame.src = src

  fabric.Image.fromURL(src, function(img, isError) {
     oImg1=img.set({ left: 0, top: 0, id: 'frame'}).scale(1);
    
    oImg1.scaleX=canvas.width / img.width
    oImg1.scaleY=canvas.height / img.height
    canvas.add(oImg1).renderAll();

document.getElementById('hue').addEventListener('input', changeFrameColor)
          
          function changeFrameColor(){
            var color=this.value
            var filter = new fabric.Image.filters.Tint({
                         color: color,
                         mode: 'tint',
                         alpha: 1
                });
                
                img.filters.push(filter);
                img.applyFilters(canvas.renderAll.bind(canvas));
       }    

   });
}
// ---------------------add sport icons----------------------------

$('.sport-icon').click(function(){
  var icon=$(this).attr('src')
  console.log(icon)
  canvas.isDrawingMode = false;

  console.log(canvas.height)
  fabric.Image.fromURL(icon, function(img, isError) {
     
   var oImg=img.set({ left: 0, top: 00, id: 'sport' }).scale(0.3);;
   canvas.toDataURL({ format: 'svg'});
                      oImg.scaleToHeight(50);
                      oImg.scaleToWidth(50);
                      canvas.add(oImg).renderAll();
});
})

// ----------------------layer for selected object-----------------------------------------
      canvas.preserveObjectStacking = true;
      canvas.stopContextMenu = true;
      var selectedObject;
      canvas.on('object:selected', function(event) {
           selectedObject = event.target;
           selectedObject.hasBorders = true;
           selectedObject.set({
                              borderColor: '#133960',
                              cornerColor: '#fad565',
                              cornerSize: 8,
                              cornerStyle: 'circle',
                              borderWidth: 3,
                              lineWidth:5,
                              transparentCorners: false,
          });
           canvas.forEachObject(function (obj) {
       });
           sendSelectedObjectBack()
         });

var sendSelectedObjectBack = function() {
      
        if(selectedObject.id=='backimage'){
              canvas.bringForward(selectedObject);
        }
        if(selectedObject.id=='frame'){
              canvas.sendToBack(selectedObject);
        }
        if(selectedObject.id=='sport' ){
              canvas.bringToFront(selectedObject);
        }
        // if(selectedObject.id=='text' ){
        //       // canvas.sendToBack(selectedObject);
        // }
        if(selectedObject.id=='rect' ){
              canvas.sendToBack(selectedObject);
        }
     canvas.renderAll();
     // sendToBack
     // sendBackwards
     // bringToFront
     // bringForward
}
// -----------------------delete selected object--------------------------
$('html').keyup(function(e){
        if(e.keyCode == 46) {
          console.log('dd')
            deleteSelectedObjectsFromCanvas();
        }
});    

function deleteSelectedObjectsFromCanvas(){
    var selection = canvas.getActiveObject();
    if (selection.type === 'activeSelection') {
        selection.forEachObject(function(element) {
            console.log(element);
            canvas.remove(element);
        });
    }
    else{
        canvas.remove(selection);
    }
    canvas.discardActiveObject();
    // canvas.RenderAll();
}

canvas.on('selection:updated selection:created', function(e){
  console.log(e)
})

// ----------------draw ---------------------------------
$('.draw').click(function(){
  var color=$('#draw-color').val()
  var size=$('.active-size').attr('data-size')
  var draw_type=$('#draw-type').val()
  console.log(size)

  canvas.isDrawingMode = true;
  if(draw_type=='Spray'){
         canvas.freeDrawingBrush = new fabric.SprayBrush(canvas);
  }
  if(draw_type=='Pencil'){
         canvas.freeDrawingBrush = new fabric.PencilBrush(canvas);
  }
  if(draw_type=='Pencil'){
         canvas.freeDrawingBrush = new fabric.PencilBrush(canvas);
  }
  if(draw_type=='Circle'){
         canvas.freeDrawingBrush = new fabric.CircleBrush(canvas);
  }
  if(draw_type=='Pattern'){
         canvas.freeDrawingBrush = new fabric.PatternBrush(canvas);
  }
  canvas.freeDrawingBrush.width = size;
  canvas.freeDrawingBrush.color = color;

canvas.on('path:created', function(e) {
  e.path.set();
  canvas.sendBackwards(e.path);
  canvas.renderAll();
})

})
$('.arrow').click(function(){
  console.log('oooo')
  $('.draw').off()
})
// $('canvas').on('mousedown', function(e){
//   console.log('ddd')
//   if($('.draw').hasClass('active')){
//     // canvas.isDrawingMode = true;
//      $(".draw").trigger('click')
//   }
// })

$('.canvas-cont').blur(function(){
  console.log('fff')
  canvas.isDrawingMode = false;
})
$('#draw-color').blur(function(){
  console.log('ccc')
})
$('#draw-color').change(function(){
  $(".draw").trigger('click')
})
$('.draw-size').click(function(){
   $('.draw-size').removeClass('active-size')
   $(this).addClass('active-size')
  $(".draw").trigger('click')
})
$('#draw-type').change(function(){
  $(".draw").trigger('click')
})
// -------------------------shapes-------------------------------------
var myPoly
$('.shapes').click(function(){
  var sh_name=$(this).attr('name')
  var point=$(this).attr('data-angle')

var points=regularPolygonPoints(point,50);

function regularPolygonPoints(sideCount,radius){
  var sweep=Math.PI*2/sideCount;
  var cx=radius;
  var cy=radius;
  var points=[];
  for(var i=0;i<sideCount;i++){
    var x=cx+radius*Math.cos(i*sweep);
    var y=cy+radius*Math.sin(i*sweep);
    points.push({x:x,y:y});
  }
  return(points);
}

if(sh_name=='elipse'){
       myPoly = new fabric.Ellipse({
        top: 10,
        left: 10,
       /* Try same values rx, ry => circle */
        rx: 75,
        ry: 50,
        fill: 'blue',
        // stroke: 'blue',
        strokeWidth: 4
    });
}
else if(sh_name=='rectangle'){
     myPoly = new fabric.Rect({
    top: 10,
    left: 10,
    width: 75,
    height: 100,
    fill: 'blue',
    strokeWidth: 2
});
}
else{
     myPoly = new fabric.Polygon(points, {
        left: 10,
        top: 10,
        fill: 'blue',
      },false);
}
canvas.add(myPoly);
// rec.sendBackwards()
canvas.sendToBack(myPoly);
canvas.renderAll();
})
$('.shape-color').click(function(){
    var color=$(this).attr('data-color')

    myPoly.setFill(color)
    canvas.renderAll();
})
$('#shape-color-inp').on('input', function(){
    var color=$(this).val()
    myPoly.setFill(color)
    canvas.renderAll();
})
// -----------------------------add text-------------------------------
$('#fill').on('input', function(){
  var obj = canvas.getActiveObject();

  if(obj){
    obj.set("fill", this.value);
  }
  canvas.renderAll();
});

$('#font').change(function(){
  var obj = canvas.getActiveObject();
  
  if(obj){
    obj.set("fontFamily", this.value);
  }
  
  canvas.renderAll();
});
$('#text').click(function(){
   canvas.isDrawingMode = false;
var oText = new fabric.IText('Tap and Type', { 
    left: 200, 
    top: 300 ,
    id: 'text',
  });

  canvas.add(oText);
  oText.bringToFront();
  canvas.setActiveObject(oText);
})
// ---------------------------background color------------------
$('.background-color').click(function(){
    var color=$(this).attr('data-color')

    canvas.setBackgroundColor(color)
    canvas.renderAll();
})
$('#color-inp').on('input', function(){
    var color=$(this).val()
console.log(color)
    canvas.setBackgroundColor(color)
    canvas.renderAll();
})
// ---------------download image------------------------------
// var imageSaver = document.getElementById('lnkDownload');
// imageSaver.addEventListener('click', saveImage);

// function saveImage(e) {
//     this.href = canvas.toDataURL({
//         format: 'jpeg',
//         quality: 0.8
//     });
//     this.download = 'canvas.png'
// }


$('#lnkDownload').click(function(e){
     var th=this

     canvas.renderAll();
     var data=canvas.toDataURL()
     var name=$('#image-name').val()
     var format=''
     $('.format').each(function(){
      if($(this).prop('checked')==true){
         format=$(this).attr('data-format')
      }
     })

     th.href = canvas.toDataURL({
                     format: 'jpeg',
                     quality: 0.8
              });
     th.download = name+'.'+format
     
            $.ajax({
              type: 'post',
              url: 'card-editor/file.php',
              data: {name: name, data: data, format_image: format},
              success: function(res){
                console.log(res)
                  $('.downloade-res').html(res)
                    // var a = document.createElement('a');
                    // a.href ='card-editor/'+ res;
                    // a.download = name;
                    // document.body.appendChild(a);
                    // a.click();
                    // document.body.removeChild(a);
              }
            })
        })