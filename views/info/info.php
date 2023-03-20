<section class="clearfix header mt-5 pt-4">
    <div class="container ">
        <h3>Thông tin cá nhân</h3>
        <table class="table">
            <tr>
                <th scope="col">Họ tên: </th>
                <td><?=$_SESSION['user']['name']?></td>
            </tr>
            <tr>
                <th scope="col">Email: </th>
                <td><?=$_SESSION['user']['email']?></td>
            </tr>
            <tr>
                <th scope="col">Số điện thoại: </th>
                <td><?=$_SESSION['user']['phone']?></td>
            </tr>
            <tr>
                <th scope="col">Địa chỉ: </th>
                <td><?=$_SESSION['user']['address']?></td>
            </tr>
        </table>
    </div>
</section>