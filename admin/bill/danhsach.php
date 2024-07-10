<div class="a">
    <div class="a tm mb2">
        <h1>Danh sách đơn hàng</h1>
    </div>
    <div class="a formconten">
        <div class="a mb2 formds">
            <table border="1">

                <tr>
                    <th class="sp">ID</th>
                    <th class="sp">Tên khách hàng</th>
                    <th class="sp">Phone</th>
                    <th class="sp">Email</th>
                    <th class="sp">Address</th>
                    <th class="sp">Phương thức thanh toán</th>
                    <th class="sp">Ngày đặt hàng</th>
                    <th class="sp">Ghi chú</th>
                    <th class="sp">Tổng tiền </th>
                    <th class="sp">Chỉnh</th>
                </tr>
                <?php 
                    foreach ($list_bill as $bill) {
                        extract($bill);
                    }
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $name . '</td>
                    <td>' . $phone . '</td>
                    <td>' . $email . '</td> 
                    <td>' . $address . '</td>
                    <td>' . $pay . '</td>
                    <td>' . $date_oder . '</td>
                    <td>' . $ghichu . '</td>
                    <td>' . $total. '</td> 
                   
                    <td></td>
                </tr>';
                ?>
            </table>
        </div>
        <!-- <div class="a mb2">

        </div> -->
</div>