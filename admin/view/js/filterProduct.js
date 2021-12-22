$("#filterCBO").change(function () {
  $.ajax({
    url: "http://"+window.location.host+"/atproject/admin/controller/productController.php",
    type: "get",
    dataType: "json",
    cache: false,
    data: $("#filterCBO").serialize(),
    success: function (data) {
      $(".productRow").remove();
      $.each(data, function (i, item) {
        var n = new Number(item.gia);
        var myObj = {
            style : 'currency',
            currency : 'VND'
        };
        x = n.toLocaleString("it-IT", myObj);

        var temp = $("#filterCBO").val();
        var str = "";
        if (temp == "Laptop") {
          str = "editlaptop";
        } else str = "editPhuKien";
        var $tr = $("<tr class='productRow'>")
          .append(
            $('<th scope="row">').text(item.masp),
            $("<td>").html(`<img src=".${item.hinh}" alt="">`),
            $("<td>").text(item.tensp),
            $("<td>").text(x),
            $("<td>").text(item.soluong),
            $("<td>").text(item.tinhtrang),
            $(
              '<td class="action d-flex justify-content-around align-items-center">'
            ).html(`<a href="./${str}.php?masp=${item.masp}" class="sua">Sửa</a>
                            <a href="../controller/productController.php?action=delete&masp=${item.masp}" class="xoa">Xóa</a>`)
          )
          .appendTo("#showCase");
      });
    },
  });
});

$("#productHidden").load("quanlysanpham.php #productHidden", function () {
  $.ajax({
    url: "http://"+window.location.host+"/atproject/admin/controller/productController.php?action=Laptop",
    type: "get",
    dataType: "json",
    cache: false,
    data: $("#filterCBO").serialize(),
    success: function (data) {
      $(".productRow").remove();
      console.log(data);
      $.each(data, function (i, item) {
        var n = new Number(item.gia);
        var myObj = {
            style : 'currency',
            currency : 'VND'
        };
        x = n.toLocaleString("it-IT", myObj);
        var $tr = $("<tr class='productRow'>")
          .append(
            $('<th scope="row">').text(item.masp),
            $("<td>").html(`<img src=".${item.hinh}" alt="">`),
            $("<td>").text(item.tensp),
            $("<td>").text(x),
            $("<td>").text(item.soluong),
            $("<td>").text(item.tinhtrang),
            $(
              '<td class="action d-flex justify-content-around align-items-center">'
            )
              .html(`<a href="./editlaptop.php?masp=${item.masp}" class="sua">Sửa</a>
                              <a href="../controller/productController.php?action=delete&masp=${item.masp}" class="xoa">Xóa</a>`)
          )
          .appendTo("#showCase");
      });
    },
  });
});
