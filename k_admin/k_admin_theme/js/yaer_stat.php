<?php $year_graph_count_query = mysqli_query($msql_connect, "SELECT year, COUNT(year) as 'this_year' FROM callbacks WHERE year = '$this_year_date'");
$year_graph_count_fetch = mysqli_fetch_array($year_graph_count_query);
$year_count_for_functions = $year_graph_count_fetch['this_year'];

$month_graph_count_query = mysqli_query($msql_connect, "SELECT month, COUNT(month) as 'this_month' FROM callbacks WHERE year = '$this_year_date' GROUP BY month DESC");
while($month_graph_count_fetch = mysqli_fetch_array($month_graph_count_query)){
  $month_count_for_functions = $month_graph_count_fetch['this_month'];
  $month_names = $month_graph_count_fetch['month'];
  if($month_names == 1){
    $month_name_title = "Январь";
  }
  if($month_names == 2){
    $month_name_title = "Февраль";
  }
  if($month_names == 3){
    $month_name_title = "Март";
  }
  if($month_names == 4){
    $month_name_title = "Апрель";
  }
  if($month_names == 5){
    $month_name_title = "Май";
  }
  if($month_names == 6){
    $month_name_title = "Июнь";
  }
  if($month_names == 7){
    $month_name_title = "Июль";
  }
  if($month_names == 8){
    $month_name_title = "Август";
  }
  if($month_names == 9){
    $month_name_title = "Сентябрь";
  }
  if($month_names == 10){
    $month_name_title = "Октябрь";
  }
  if($month_names == 11){
    $month_name_title = "Ноябрь";
  }
  if($month_names == 12){
    $month_name_title = "Декабрь";
  }
  $end_summ = ($month_count_for_functions * 100) / $year_count_for_functions; ?>
  <div class="main-stat-year-pre-div" style="width: <?php echo $end_summ; ?>% !important;  background: #<?php echo(rand(111111, 999999)); ?>;">
    <p class="main-stat-year-count-p" style="color: #FFF !important;">
      <?php echo $month_name_title; ?> - <?php echo $month_count_for_functions; ?>
    </p>
  </div>
<?php } ?>
