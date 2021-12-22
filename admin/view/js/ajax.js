function ajaxExec(url,type,data,functionAjax){
    $.ajax({
        url: url,
        type: type,
        dataType: "json",
        cache: false,
        data: $("#filterCBO").serialize(),
        success: functionAjax
      });
}