<?php $month_graph_count_query = mysqli_query($msql_connect, "SELECT day, COUNT(day) as 'this_day' FROM callbacks WHERE year = '$this_year_date' AND month = '$this_month_date' GROUP BY day");
  while($month_graph_count_fetch = mysqli_fetch_array($month_graph_count_query)){ ?>
    <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
      <div class="k-admin-stats-days">
        <small>Дата: <b><?php echo $month_graph_count_fetch['day']; ?>.<?php echo date("m"); ?></b></small>
        <br>
        <small>Кол-во:</small> <h4><?php echo $month_graph_count_fetch['this_day']; ?></h4>
      </div>
    </div>
<?php } ?>
