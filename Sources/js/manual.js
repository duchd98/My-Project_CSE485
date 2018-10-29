function gettienthua(){
  $(document).ready(function(){
    var tongtien = document.getElementById('tongtien').value;
    var khachdua = document.getElementById('khachdua').value;
    var tienthua = document.getElementById('tienthua').value;
    //var tienthua = tongtien-khachdua;
    var tong = parseInt(tongtien.value) - parseInt(khachdua.value);
    if (!isNaN(tong)){
          tienthua.value = tong;
        }
    
  });
}

function tinh()
      {
        // Lấy 3 ô input
        var tongtien = document.getElementById("tongtien");
        var khachdua = document.getElementById("khachdua");
        var result = document.getElementById("tienthua");
        
        // Tính tổng hai ô đầu tiên
        if(tongtien>khachdua){
          var tong = eval(parseFloat(tongtien.value) - parseFloat(khachdua.value);
        }else{
          var tong = parseFloat(khachdua.value) - parseFloat(tongtien.value);
        }
        
        // Gán giá trị vào ô thứ ba
        // Phải kiểm tra tổng hai số này có bị lỗi hay không
        if (!isNaN(tong)){
          result.value = tong;
        }
      }

$('.ssnumber').on('input', function(e){        
    $(this).val(formatCurrency(this.value.replace(/[,VNÐ]/g,'')));
}).on('keypress',function(e){
    if(!$.isNumeric(String.fromCharCode(e.which))) e.preventDefault();
}).on('paste', function(e){    
    var cb = e.originalEvent.clipboardData || window.clipboardData;      
    if(!$.isNumeric(cb.getData('number'))) e.preventDefault();
});
function formatCurrency(number){
    var n = number.split('').reverse().join("");
    var n2 = n.replace(/\d\d\d(?!$)/g, "$&,");    
    return  n2.split('').reverse().join('');
}

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});