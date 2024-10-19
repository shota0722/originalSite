<?php get_header(); ?>
<main>
    <section class="ad">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/basketball1.jpg'); ?>" alt="">
        <h2 class="leftin">札幌から世界へ</h2>
        <a href="" class="rightin">トライアウト申込</a>
    </section><!-- ad fin -->

    <section class="philosophy wrapper">
        <h2>活動理念</h2>
        <ul>
            <li class="philo-texts leftin">
                <h3 class="gothic">MISSION</h3>
                <p>札幌の競技力を向上させる</p>
                <p>世界に通用する実力を持った選手を育成する</p>
            </li>
            <li class="rightin"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/basketball2.jpg'); ?>" alt=""></li>
            <li class="leftin"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/basketball3.jpg'); ?>" alt=""></li>
            <li class="philo-texts rightin">
                <h3 class="gothic">VISION</h3>
                <p>才能を伸ばす育成システムの構築</p>
                <p>各選手と海外とのコネクションを作る</p>
            </li>
            <li class="philo-texts leftin">
                <h3 class="gothic">VALUE</h3>
                <p>他者と強調することの難しさと楽しさを理解してもらう</p>
                <p>自分の道を切り開く力を身に着けさせる</p>
            </li>
            <li class="rightin"><img src="<?php echo esc_url(get_template_directory_uri() . '/img/basketball4.jpg'); ?>" alt=""></li>
        </ul>
    </section><!-- philosophy fin -->
    <section class="activity wrapper">
        <h2>活動概要</h2>
        <table>
            <tr>
                <th>チーム名</th>
                <td>札幌ジョリーズU18</td>
            </tr>
            <tr>
                <th>練習場所</th>
                <td>札幌市N体育館</td>
            </tr>
            <tr>
                <th>活動条件</th>
                <td>トライアウト合格</td>
            </tr>
            <tr>
                <th>活動内容</th>
                <td>月水金週三回の練習（19:00～21:00）<br>土日の一方は他クラブまたは高校との試合（12:00~16:00）<br>栄養面や身体管理について専門家からの指導</td>
            </tr>
            <tr>
                <th>費用</th>
                <td>入会金:10000円<br>年会費:5000円<br>月謝:30000円<br>その他遠征費などを頂戴する場合がございます。</td>
            </tr>
            <tr>
                <th>JBA登録</th>
                <td>クラブチームにて登録をいたします。<br>部活との両立に関してはご相談ください。</td>
            </tr>
        </table>
    </section><!-- activity fin -->
</main>
<!-- main fin -->
<?php get_footer(); ?>