<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content=''>
    <link rel="stylesheet" href="./lib/bootstrap-3.3.7.css">
    <title>shopping</title>
    <script src="./lib/vue-2.4.0.js"></script>

</head>

<body>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">预览图</th>
                    <th class="text-center">品牌</th>
                    <th class="text-center">价格</th>
                    <th class="text-center">数量</th>
                    <th class="text-center">总价</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr v-for="(value,index) in arr">
                    <td><img :src="img" /></td>
                    <td>{{value.two}}</td>
                    <td>{{value.three}}￥</td>
                    <td><button v-on:click='list(index)'>+</button>
                        <span>{{value.four}}</span>
                        <button v-on:click='list1(index)'>-</button></td>
                    <td>{{value.five}}￥</td>
                </tr>
                <tr>
                    <td colspan="5" class="text-center">总计：{{arrs}}.00￥</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        new Vue({
            el: '.container',
            data: {
                arr: [{
                        img: '',
                        two: 'OPPO',
                        three: 1599.00,
                        four: 1,
                        five: 1599.00
                    },
                    {
                        img: '',
                        two: 'HUAWEI',
                        three: 2699.00,
                        four: 1,
                        five: 2690.00
                    },
                    {
                        img: '',
                        two: 'honor',
                        three: 3399.00,
                        four: 1,
                        five: 3399.00
                    }
                ],
                arrs: 7288,
            },
            methods: {
                list: function(ind) {
                    this.arr[ind].four++;

                    this.arr[ind].five = this.arr[ind].four * this.arr[ind].three;

                    this.total();
                },
                list1: function(ind) {
                    if (this.arr[ind].four > 1) {
                        this.arr[ind].four--;
                    }

                    this.arr[ind].five = this.arr[ind].four * this.arr[ind].three

                    this.total();
                },


                total: function() {
                    for (var i = 0, tot = 0; i < this.arr.length; i++) {
                        tot += this.arr[i].five;
                    }
                    this.arrs = tot;
                }
            }
        })
    </script>
</body>

</html>