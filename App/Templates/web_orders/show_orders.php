<?php /* * @var \App\Data\OrderDTO [] $data */ ?>
<?php require_once __DIR__ . '../../header_bons.php'; ?>

<?php foreach ($errors as $error): ?>
<p style="color: red"><?= $error ?></p>
<?php endforeach; ?>
<form method="post" Onload='document.getElementById("tileNumber").focus()' >
    <!--<button onclick="document.location = 'easy_list.php'" type="button">Направи списък</button>-->
    <table>
        <tr >
            <th  style="color:blue">Избери дата</th>

            <td >
                <input style="width: 165px;" id="search_input" 
                       type="date" name="date" value=""/></td>
        </tr>
        
        <tr>
            <td>
                <button id="button" style="background-color: #59b300" type="submit" name="show" value="1" >Давай</button>
            </td>
        </tr>

    </table>

    <div>
        
        <?php foreach ($data['webOrders'] as $order): ?>
        <div>
            <strong><a href="../uploaded-orders/<?= $order->getOrderNumber()?>.html" target="_blank" ><?=$order->getOrderNumber()?></a></strong>
            <small><?=$order->getRecordDate()?></small>
        </div>
        <hr>

        <?php endforeach; ?> 
        

    </div>
</div>

</main>





