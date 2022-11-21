<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currency Convertor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="m-5 text-center">
        <h2>Currency Convertor</h2>
    </div>
    <div class="container">
        <table>
            <tr>
                <th>Amount</th>
                <th>From</th>
                <th></th>
                <th>To</th>
            </tr>
            <tr>
                <td>
                    <div class="me-4">
                        <input type="number" name="amount" min="0" id="amount">
                    </div>
                </td>
                <td>
                    <div class="form-floating me-3">
                        <select class="form-select" id="fromCurrency" aria-label="Floating label select example">
                        </select>
                        <label for="fromCurrency">From Currency</label>
                    </div>
                </td>
                <td>
                    <button id="swapBtn" class="btn rounded-circle border me-3"><i class="fa-solid fa-repeat"></i></button>
                </td>
                <td>
                    <div class="form-floating ">
                        <select class="form-select" id="toCurrency" aria-label="Floating label select example">
                        </select>
                        <label for="toCurrency">To Currency</label>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="container m-5">
        <div class="text-center">
            <h4>Conversion</h4>
        </div>
        <div class="text-center">
            <div id="rate">
                <!-- display rate -->
            </div>
            <div id="conversionResult">
                <!-- display result -->
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="./script.js"></script>
</html>