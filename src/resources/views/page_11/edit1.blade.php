<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ページ１１</title>
</head>

<body>
    <form method="POST" action="{{ route('page_11.update1', [$page_11_1, $user]) }}">
        @csrf
        @method('patch')

        <div class="head">
            <label>＜出産後・退院時の診察のときに記入してもらいましょう。＞</label>
        </div>

        <div class="title">
            <h1>出産後の母体の経過</h1>
        </div>

        <div class="container">
            <table border="1">
                <tr>
                    <th>産後日月数</th>
                    <th>子宮復古</th>
                    <th>悪露</th>
                    <th>乳房の状態</th>
                    <th>血圧</th>
                    <th>尿蛋白</th>
                    <th>尿糖</th>
                    <th>体重</th>
                    <th>ＥＰＤＳ等の実施など</th>
                </tr>
                <tr>
                    <td>
                        <input type="date" name="record_date" required value="{{ $page_11_1->record_date }}">
                    </td>
                    <td>
                        <input type="hidden" name="uterus_restoration" value=""
                            {{ $page_11_1->uterus_restoration == '' ? 'checked' : '' }}>
                        <input type="radio" name="uterus_restoration" value="1"
                            {{ $page_11_1->uterus_restoration == '1' ? 'checked' : '' }}>良
                        <input type="radio" name="uterus_restoration" value="2"
                            {{ $page_11_1->uterus_restoration == '2' ? 'checked' : '' }}>否
                    </td>
                    <td>
                        <input type="hidden" name="lochia" value=""
                            {{ $page_11_1->lochia == '' ? 'checked' : '' }}>
                        <input type="radio" name="lochia" value="1"
                            {{ $page_11_1->lochia == '1' ? 'checked' : '' }}>正
                        <input type="radio" name="lochia" value="2"
                            {{ $page_11_1->lochia == '2' ? 'checked' : '' }}>否
                    </td>
                    <td><input type="text" name="breast_condition" value="{{ $page_11_1->breast_condition }}"></td>
                    <td>
                        最高：
                        <input type="number" step="0.1" name="blood_pressure_max" max="999"
                            value="{{ $page_11_1->blood_pressure_max }}"> mmHg
                        <br>
                        最低：
                        <input type="number" step="0.1" name="blood_pressure_min" max="999"
                            value="{{ $page_11_1->blood_pressure_min }}"> mmHg
                    </td>
                    <td>
                        <input type="hidden" name="urine_protein" value=""
                            {{ $page_11_1->urine_protein == '' ? 'checked' : '' }}>
                        <input type="radio" name="urine_protein" value="1"
                            {{ $page_11_1->urine_protein == '1' ? 'checked' : '' }}>－
                        <input type="radio" name="urine_protein" value="2"
                            {{ $page_11_1->urine_protein == '2' ? 'checked' : '' }}>＋
                        <input type="radio" name="urine_protein" value="3"
                            {{ $page_11_1->urine_protein == '3' ? 'checked' : '' }}>＋＋
                    </td>
                    <td>
                        <input type="hidden" name="urine_sugar" value=""
                            {{ $page_11_1->urine_sugar == '' ? 'checked' : '' }}>
                        <input type="radio" name="urine_sugar" value="1"
                            {{ $page_11_1->urine_sugar == '1' ? 'checked' : '' }}>－
                        <input type="radio" name="urine_sugar" value="2"
                            {{ $page_11_1->urine_sugar == '2' ? 'checked' : '' }}>＋
                        <input type="radio" name="urine_sugar" value="3"
                            {{ $page_11_1->urine_sugar == '3' ? 'checked' : '' }}>＋＋
                    </td>
                    <td>
                        <input type="number" step="0.1" name="weight" max="999"
                            value="{{ $page_11_1->weight }}"> kg
                    </td>
                    <td>
                        <input type="text" name="epds_etc_implementation"
                            value="{{ $page_11_1->epds_etc_implementation }}">
                    </td>
                </tr>
            </table>
        </div>

        {{-- ボタン --}}
        <div>
            <button type="submit" class="btn btn-primary">修正</button>
            <a href="{{ route('page_11.edit2', $user) }}">戻る</a>
        </div>

    </form>

</body>

</html>
