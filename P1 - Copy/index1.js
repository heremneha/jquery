$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 1 }, "slow");
    return false;
  });
  