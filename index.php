<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<div class="row">
  <div class="col-md-3"></div>
  <div class="col-md-4">
  <h2>Calculator</h2>
  <div class="form-group">
      <label for="email"></label>
      <input type="text" class="form-control" id="result_box" placeholder="0" value="" name="result_box" readonly>
      <input type="hidden"  id="maxNumber" value="0" name="maxNumber" />
      <input type="hidden"  id="operatorLimit" value="0" name="operatorLimit" />
      <input type="hidden"  id="number1" value="0" name="number1" />
      <input type="hidden"  id="number2" value="0" name="number2" />
      <input type="hidden"  id="operator" value="+" name="operator" />
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="1">1</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="2">2</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="3">3</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default clearAll" value="C">C</button></div>
        </div>
        <div class="row">
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="4">4</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="5">5</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="6">6</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default operator" value="/">/</button></div>
        </div>
        <div class="row">
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="7">7</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="8">8</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="9">9</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default operator" value="x">x</button></div>
        </div>
        <div class="row">
            <div class="col-md-3"><button type="button" class="btn btn-default number" value="0">0</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default" onclick=getResult()>=</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default operator" value="+">+</button></div>
            <div class="col-md-3"><button type="button" class="btn btn-default operator" value="-">-</button></div>
        </div>
    </div>
    
    
    </div>
  </div>
    <div class="col-md-3"></div>
</div>
<script src="calc.js"></script>
</body>
</html>
