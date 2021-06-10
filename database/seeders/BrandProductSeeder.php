<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d H:i:s');
        //
        DB::table('brand_products')->insert([
            ['brand_name' => 'BMW',
                'brand_caption'=>'Bayerische Motoren Werke AG, dịch ra tiếng Việt là Xưởng sản xuất Mô tô xứ Bavaria, thường được gọi là BMW',
                'brand_content1'=>'là một công ty đa quốc gia của Đức chuyên sản xuất ô tô và xe máy. Công ty được thành lập vào năm 1916 với tư cách là nhà sản xuất động cơ máy bay, được sản xuất từ năm 1917 đến năm 1918 và một lần nữa từ năm 1933 đến năm 1945.
Ô tô được bán trên thị trường dưới các thương hiệu BMW, Mini và Rolls-Royce, và xe máy được bán dưới thương hiệu BMW Motorrad. Năm 2015, BMW là nhà sản xuất xe cơ giới lớn thứ mười hai thế giới, với 2.279.503 xe đã được sản xuất.[4]
BMW có trụ sở tại Munich và sản xuất xe cơ giới ở Đức, Brazil, Trung Quốc, Ấn Độ, Nam Phi, Vương quốc Anh, Hoa Kỳ và Mexico. BMW có lịch sử tham gia đua xe đáng kể, đặc biệt là trong những chiếc xe đua du lịch, Công thức 1, đua xe thể thao và Isle of Man TT.',
                'brand_content2'=>'Tiền thân của BMW là Rapp Motorenwerke. Tháng 4 năm 1917 công ty đổi tên thành BMW GmbH (Công ty TNHH BMW) và một năm sau đó là BMW AG (Công ty cổ phần BMW), giám đốc đầu tiên cho đến năm 1942 là Franz Josef Popp (1886-1954). Kỹ sư nổi bật Max Friz đã nhanh chóng tạo nên tiếng tăm trong công ty trẻ tuổi này: vào năm 1917 ông phát minh ra một động cơ máy bay có bộ chế hòa khí hoạt động ở độ cao. Nhờ vào đó động cơ vẫn đạt công suất trong bầu không khí loãng ở trên cao. Thiết kế này vượt qua các thử nghiệm tốt đến mức mà BMW nhận được đơn đặt hàng hơn 2.000 động cơ từ Bộ chỉ huy lục quân Phổ. Ngày 17 tháng 6 năm 1919 một chiếc BMW IIIa đã bí mật đạt được kỷ lục thế giới về độ cao ở 9.760 mét. Nhưng lúc chấm dứt Chiến tranh thế giới lần thứ nhất và Hiệp định hòa bình Versailles ra đời thì hình như đó cũng là thời điểm chấm dứt của công ty: Hiệp định hòa bình cấm sản xuất động cơ máy bay ở Đức trong vòng 5 năm. Năm 1922 cổ đông chính Camillo Castiglioni rời bỏ công ty mang theo các quyền về thương hiệu. Ông chuyển về Bayerische Flugzeugwerke (BFW – Các nhà máy máy bay Bayern).',
                'brand_content3'=>'Tiền thân của công ty này là Gustav-Otto-Flugzeugwerk (Nhà máy máy bay Gustav Otto) của Gustav Otto, một người con trai của nhà phát minh ra động cơ đốt trong (internal-combustion engine) Nikolaus Otto, đăng ký ngày 7 tháng 3 năm 1916. Ngày 7 tháng 3 năm 1916 được coi như là ngày thành lập BMW trong lịch sử chính thức của công ty. Cùng lúc khi Castiglioni chuyển về, BFW đã trở thành BMW.
Một năm sau khi đổi tên, năm 1923, Max Friz và Martin Stolle thiết kế chiếc xe BMW đầu tiên, chiếc R32, và qua đó đặt nền tảng cho một con đường sản xuất mới: xe máy. Friz chỉ cần 5 tuần để phác thảo chiếc R32. Nguyên lý chính của chiếc xe máy này vẫn còn được giữ lại cho đến ngày nay: động cơ boxer và trục truyền động dùng khớp các đăng trong khung ống kép.',
                'brand_description'=>'Năm 1928 BMW mua lại Công ty Fahrzeugfabrik Eisenach (Nhà máy xe hơi Eisenach), nhà sản xuất chiếc xe hơi loại nhỏ Dixi và vì thế bắt đầu vươn lên thành nhà sản xuất xe hơi. Ngày 22 tháng 3 năm 1929 BMW sản xuất chiếc xe hơi đầu tiên. Chiếc xe hơi này có tên là 3/15 PS và được chế tạo theo bản quyền của chiếc Autin Seven thuộc công ty Anh Austin Motor Company. Xe này được lắp ráp ở Berlin, cũng là nơi bắt đầu bán chiếc xe này lần đầu tiên vào ngày 9 tháng 6 năm 1929. Vì việc chế tạo động cơ máy bay bắt đầu được mở rộng nhanh chóng bắt đầu từ năm 1933 nên chi nhánh xe hơi và xe máy gần như trở thành mục đích phụ. Mặc dầu vậy các kiểu xe mới phát triển như 326 (1935), 327 (1937) và Sport-Roadster 328 được giới thiệu vào năm 1936 đều là những kiểu xe có sức thu hút. Đặc biệt là kiểu xe 328 đã thuyết phục được không những nhờ vào thiết kế nổi bật mà còn nhờ vào nhiều thành tích đạt được trong các cuộc đua xe thể thao mà một trong số đó là giải thưởng của Mille Miglia năm 1940. Kiểu xe này đã mang lại danh tiếng cho BMW như là một nhà sản xuất ô tô thể thao. Người Anh thích chiếc xe này đến mức Frazer-Nash đã sản xuất lại loại xe này theo bản quyền trong khi họ đã sử dụng động cơ BMW được nhập khẩu từ năm 1934.',
                'brand_thumbnails'=>'BMW.jpg',
                'created' => $date,
                'updated'=>$date],
            ['brand_name' => 'HONDA',
                'brand-caption'=>'Honda (本田ほんだ (Bản Điền)? cũng viết là ホンダ theo katakana) là nhà sản xuất động cơ lớn nhất thế giới của Nhật Bản với số lượng hơn 14 triệu chiếc mỗi năm',
                'brand_content1'=>'Từ năm 2004 hãng đã chế tạo động cơ chạy diesel vừa êm vừa không cần bộ lọc nhằm đáp ứng tiêu chuẩn chống ô nhiễm không khí. Tuy nhiên, có thể nói rằng, đây là nền tảng tạo nên sự thành công của công ty xuất phát điểm từ một công ty làm xe máy nhỏ lẻ.
Hãng Honda đặt trụ sở tại Tokyo và có niêm yết trên các thị trường chứng khoán Tokyo, Thành phố New York, Luân Đôn, Paris, Hãng Honda Hoa Kỳ đặt tại Torrance, California (Hoa Kỳ). Honda Canada đóng trụ sở ở vùng Scarborough của Toronto, Ontario và dời về trụ sở mới tại Richmond Hill, Ontario vào năm 2008.',
                'brand_content2'=>'Công ty Động cơ Honda được thành lập ngày 24 tháng 9 năm 1948. Ông Soichiro Honda đã nhân cơ hội nước Nhật có nhu cầu đi lại nhiều, cho dù nền kinh tế Nhật vốn bị hủy hoại nặng nề sau Chiến tranh thế giới thứ hai; lúc ấy rất thiếu thốn nhiên liệu và tiền bạc, để thành lập công ty. Công ty đã gắn động cơ vào xe đạp tạo ra một phương tiện đi lại hiệu quả và rẻ tiền.',
                'brand_content3'=>'Sau chiến tranh, cơ sở sản xuất pít-tông Honda gần như bị phá hủy. Soichiro Honda lập một công ty mới mà tiếng Nhật gọi là "Công ty trách nhiệm hữu hạn nghiên cứu Honda". Cơ sở đầu tiên của công ty có cái tên phô trương này thật ra chỉ là một nhà xưởng bình thường làm bằng gỗ và cũng là nơi ông Honda cùng cộng sự gắn động cơ cho xe đạp. Điều thú vị là cái tên công ty theo tiếng Nhật này vẫn được giữ đến nay để vinh danh nỗ lực của Soichiro Honda. Công ty Honda Hoa Kỳ được thành lập năm 1958.',
                'brand_description'=>'Năm 1976, xe Accord ngay lập tức được mọi người biết đến với đặc điểm tốn ít năng lượng và dễ lái; Honda đã tìm được chỗ đứng ở Mỹ. Năm 1982, Honda là nhà sản xuất ôtô Nhật Bản đầu tiên xây dựng nhà máy sản xuất xe hơi ở Mỹ, bắt đầu với nhà máy sản xuất xe Accord ở Marysville. Đến nay, hãng đã có bốn nhà máy sản xuất xe ở Ohio: 2 ở Marysville (nhà máy tự động Marysville và nhà máy sản xuất xe gắn máy Marysville), Anna, và Đông Liberty. Hãng còn có các nhà máy ở Lincoln, Alabama (Honda Manufacturing of Alabama), và Timmonsville, Nam Carolina, và gần đây (2006) Honda đã mở một nhà máy mới ở Tallapoosa, Georgia. Honda mở rộng thêm sau khi có thị phần ở Marysville, Ohio, và cơ sở nghiên cứu và phát triển ở Raymond, Ohio. Bộ phận quản lý của Honda Bắc Mỹ đặt ở Torrance, California. Honda Canada và các xe Civic bán cho Mỹ có nhà máy sản xuất ở Alliston, Ontario từ năm 1985. Ngày 27 tháng 6 năm 2006, Honda thông báo đang mở thêm mộ cơ sở sản xuất ở Bắc Mỹ, đặt ở Greensburg, Indiana. Nhà máy này dự kiến sẽ hoàn thành vào năm 2008.',
                'brand_thumbnails'=>'Honda.jpg',
                'created' => $date,
                'updated'=>$date],
            ['brand_name' => 'Mercedes',
                'brand_caption'=>'Mercedes-Benz là một trong những hãng sản xuất xe ô tô, xe buýt, xe tải danh tiếng trên thế giới.',
                'brand_content1'=>'Hãng được xem là hãng sản xuất xe hơi lâu đời nhất còn tồn tại đến ngày nay. Khởi đầu, hãng thuộc sở hữu bởi Daimler-Benz. Hiện tại, hãng là một thành viên của công ty mẹ, Daimler AG (tên trước đây là DaimlerChrysler AG). Mercedes-Benz còn là một trong những hãng đi tiên phong trong việc giới thiệu nhiều công nghệ và những sáng kiến về độ an toàn mà sau đó đã trở nên phổ biến trên toàn thế giới.',
                'brand_content2'=>'Nguồn gốc ban đầu của hãng được xem là phát triển từ hai nhánh hoàn toàn độc lập nhau. Năm 1883, Karl Benz thành lập "Benz & Co. Rheinische Gasmotorenfabrik Mannheim" (Nhà máy động cơ khí Rhein Mannheim Benz & Co.). Năm 1886, hãng đã cho ra đời những chiếc xe đầu tiên mang nhãn hiệu Benz Patent Motorwagen. Chỉ trong 15 năm sau đó, hãng đã trở thành một trong những nhà máy sản xuất xe hơi lớn nhất trên thế giới.',
                'brand_content3'=>'Sự phát triển của 2 hãng đều có những lúc thăng trầm. Benz ngưng không tham gia trực tiếp vào các công việc của nhà máy vào năm 1903. Maybach rời khỏi DMG năm 1907. Hai năm sau đó, Jellinek cũng không tham gia với DMG nữa.',
                'brand_description'=>'Vào năm 1958, Mercedes-Benz đã đạt được một thoả thuận với hãng Studebaker-Packard ở South Bend, Indiana (Mỹ). Theo thoả thuận, Studebaker sẽ cho phép Mercedes-Benz hoạt động theo một mạng lưới ở Mỹ, cung cấp phương tiện cho các chi nhánh bán hàng, và đổi lại, nhận được tiền lãi từ những chiếc xe đã bán. Studebaker cũng cho phép sử dụng tên tiếng Đức của những chiếc xe khi quảng cáo, điều này sẽ gây sức ép về chất lượng hơn là số lượng.
Khi Studebaker có những cuộc đàm phán không chính thức với hãng sản xuất xe hơi Facel Vega về việc đề nghị những mẫu xe Facel Vega Exellence ở Mỹ, Mercedes-Benz đã phản đối với đề nghi này. Studebaker, hãng cần Mercedes-Benz phân phối tiền trả để giúp họ tránh lỗ nặng, không tạo thêm hành động nào cho vụ này.',
                'brand_thumbnails'=>'mercedes.jpg',
                'created' => $date,
                'updated'=>$date],
            ['brand_name' => 'Mazda',
                'brand_caption'=>'Mazda Motors Corporation (Phiên âm: Ma-zư-đa hoặc Ma-tsư-đa, tiếng Nhật: マツダ株式会社 / Matsuda Kabushiki Gaisha) là công ty đa quốc gia sản xuất xe hơi của Nhật Bản, có trụ sở tại Fuchū, Quận Aki, Hiroshima, Nhật Bản.[1]',
                'brand_content1'=>'Mazda khởi đầu với tên Công ty TNHH Toyo Cork Kogyo, được thành lập ở Hiroshima, Nhật Bản, ngày 30 tháng 1 năm 1920. Toyo Cork Kogyo đổi tên thành Toyo Kogyo Co., Ltd. vào năm 1927. Vào cuối những năm 1920, công ty được Hiroshima Saving Bank và các nhà lãnh đạo kinh doanh khác ở Hiroshima cứu thoát khỏi tình trạng phá sản.[3]',
                'brand_content2'=>'Năm 1931 Toyo Kogyo thay đổi từ sản xuất máy công cụ đến sản xuất xe ô tô với sự giới thiệu của Mazda-Go autorickshaw. Toyo Kogyo sản xuất vũ khí cho quân đội Nhật trong suốt Thế chiến thứ hai, đáng chú ý nhất là loại súng trường số 99 loại 30 đến 35.',
                'brand_content3'=>'tên thành Mazda vào năm 1984, mặc dù mỗi chiếc ô tô đều mang tên đó ngay từ đầu. Mazda R360 được giới thiệu vào năm 1960, theo sau là Mazda Carol năm 1962.',
                'brand_description'=>'mazda',
                'brand_thumbnails'=>'mazda.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'yamaha',
                'brand_caption'=>'Công ty công nghiệp Yamaha (ヤマハ株式会社/Yamaha Corporation) là một công ty Nhật Bản chuyên nhiều lĩnh vực khác nhau từ những nhạc cụ, động cơ, xe gắn máy cho đến những thiết bị điện.',
                'brand_content1'=>'Yamaha ban đầu là một công ty chế tạo đàn piano, Torakusu Yamaha là người sáng lập vào năm 1887 tại thành phố Hamamatsu, Shizuoka, Nhật Bản.',
                'brand_content2'=>'Nhờ nắm được công nghệ chế tạo hợp kim nhẹ, bền trong các chi tiết của đàn piano nên từ sau Thế chiến 2, Yamaha bắt đầu ứng dụng thành công những kinh nghiệm đó vào sản xuất động cơ và xe máy.',
                'brand_content3'=>'Yamaha Motors hiện là nhà sản xuất xe máy lớn thứ 2 thế giới, đội đua Yamaha có tay đua kỳ cựu Valentino Rossi.
Hiện diện tại Việt Nam từ 1998, Yamaha Việt Nam luôn đi đầu trong việc nghiên cứu và chế tạo ra các mẫu xe có thiết kế thể thao, đẹp mắt, động cơ, mạnh và ổn định.',
                'brand_description'=>'Yamaha Music Foundation là một tổ chức được thành lập vào năm 1966 bởi cơ quan của Bộ Giáo dục Nhật Bản với mục đích thúc đẩy giáo dục âm nhạc và phổ biến âm nhạc. Nó tiếp tục một chương trình các lớp học âm nhạc được bắt đầu bởi Yamaha Corporation vào năm 1954.',
                'brand_thumbnails'=>'yamaha.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'Hyundai',
                'brand_caption'=>'Tập đoàn Hyundai (tiếng Hàn: 현대그룹, Hanja: 現代그룹, tiếng Anh: Hyundai Group, tiếng Trung: 现代集团, phiên âm Hán-Việt: Hiện Đại tập đoàn) là một tập đoàn đa quốc gia của Hàn Quốc có trụ sở chính đặt tại thủ đô Seoul, được doanh nhân kiêm nhà tư bản công nghiệp Chung Ju-yung sáng lập vào năm 1947',
                'brand_content1'=>'Đây là một trong những tập đoàn kinh tế đa ngành (Chaebol) được thành lập sớm đầu tiên của Hàn Quốc, đặt nền móng cho toàn bộ ngành công nghiệp nặng nói riêng cũng như quá trình công nghiệp hóa của quốc gia này nói chung, và đặc biệt, đây là một trong số ít những Chaebol lớn vẫn còn tồn tại cho tới tận ngày nay',
                'brand_content2'=>'Nguyên nhân dẫn đến sự thành công của Hyundai đã thay đổi rất nhiều. Trong giai đoạn đầu, họ bán những mẫu xe có độ bền cao và giá thành rẻ, nhưng giờ đây, sự hấp dẫn mới là động lực chính. Và có thể nói rằng, thành công của hãng xe Hàn Quốc chủ yếu là do những tiến bộ đáng kể trong phong cách thiết kế của họ.
Quay trở lại mẫu xe giá rẻ và thiết kế vui mắt mang tên Pony năm 1975, mẫu Stellar đầy góc cạnh của những năm 1980, và Lantra khá đơn điệu thời kỳ đầu những năm 1990, và thật khó mà tin rằng Hyundai lại đang tạo ra những mẫu xe với diện mạo mới hoàn toàn như i30 mới, iX35, i40 và Veloster.',
                'brand_content3'=>'Quá trình thay đổi đã được đẩy nhanh kể từ khi Thomas Burkle rời khỏi BMW về đầu quân cho Hyundai hồi năm 2005. Ảnh hưởng đầu tiên của phong cách Burkle được thấy rõ trong phiên bản i20 mới nhất, nhưng quan trọng hơn, ông là người đã giới thiệu ngôn ngữ “điêu khắc dòng chảy” thông qua mẫu concept Genus 2006 tại triển lãm Geneva năm đó.',
                'brand_description'=>'Hiện nay, Hyundai đang có quy mô và tầm ảnh hưởng tới nền kinh tế, đời sống chính trị – xã hội lớn thứ hai tại Hàn Quốc chỉ sau tập đoàn Samsung',
                'brand_thumbnails'=>'hyundai.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'porsche',
                'brand_caption'=>'Dr. Ing. h. c. F. Porsche AG được thành lập từ ngày 25 tháng 4 năm 1931 bởi ông Ferdinand Porsche và có trụ sở chính đặt tại thành phố Stuttgart, Đức',
                'brand_content1'=>'Trải qua 87 năm kiên định với triết lý kinh doanh của thương hiệu, Porsche AG hiện là một trong những nhà sản xuất xe thể thao hàng đầu thế giới với các dòng xe chủ lực và hấp dẫn như huyền thoại 911, 718 Boxster, 718 Cayman, Gran Turismo Panamera, SUV Cayenne, SUV cỡ trung Macan.',
                'brand_content2'=>'Với sự phát triển mạnh mẽ về kết quả hoạt động, hệ thống phân phối của Porsche ngày càng được mở rộng bao gồm 8 thị trường trọng yếu: Châu Âu, Đức, Châu Mỹ, Mỹ, Châu Á Thái Bình Dương, Châu Phi, Trung Đông và Trung Quốc.',
                'brand_content3'=>'Tất các dòng xe Porsche đều được sản xuất tại hai nhà máy chính tại ở Đức: Nhà máy tại Zuffenhausen và nhà máy Leipzig. Dây chuyền hiện đại này có khả năng sản xuất hơn 50.000 xe một năm, tất cả đều tuân thủ những tiêu chuẩn khắt khe và toàn cầu của Porsche.',
                'brand_description'=>'Đặc biệt, phiên bản thương mại của dòng xe vận hành hoàn toàn bằng điện đầu tiên của Porsche có tên gọi là Taycan, sẽ được chính thức giới thiệu trong năm tới. Một lần nữa, Porsche lại chế tạo những gì Porsche làm tốt nhất, tạo ra những mẫu xe thể thao chạy bằng điện chưa từng có trên thê giới. Chỉ trong vòng 2 năm nữa, chiếc xe chạy hoàn toàn bằng điện đầu tiên này sẽ được ra mắt tại thị trường Việt Nam.
Liên tục thành công với kết quả kinh doanh kỷ lục trong những nằm gần đây, Porsche luôn là nhà sản xuất xe ô tô có lợi nhuận cao nhất trên thế giới, ngày càng vững bước trên con đường thành công với lực lượng lao động tăng hơn 30.785 nhân viên. Mục tiêu của Porsche không chỉ đạt kỷ lục về doanh số mà còn đặt tính bền vững vào sự tăng trưởng giá trị gia tăng và việc làm ổn định.',
                'brand_thumbnails'=>'porsche.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'mc laren',
                'brand_caption'=>'McLaren, được sáng lập vào năm 1963 bởi Bruce McLaren (1937-1970), là một đội đua nước Anh, vốn nổi tiếng nhất ở lĩnh vực đua xe Công thức 1 nhưng cũng tham gia tại Indianapolis 500-Mile Race, Canadian-American Challenge Cup và 24 Hours of Le Mans',
                'brand_content1'=>'Tên đầy đủ của đội hiện nay là Team McLaren Mercedes nhưng kể từ tháng 1 năm 2007 sẽ được đổi thành Vodafone McLaren Mercedes theo một bản hợp đồng tài trợ lớn từ hãng truyền thông Vodafone được thông báo từ tháng 12 năm 2005. Hiện nay người điều hành đội đua là Ron Dennis, dưới sự lãnh đạo của McLaren Racing, một thành viên của McLaren Group',
                'brand_content2'=>'Năm 1990 McLaren Cars được thành lập để phục vụ cho việc sản xuất xe hơi thông dụng dựa trên chuyên môn sẵn có từ các cuộc đua xe.

McLaren là một trong những đội đua thành công nhất ở Công thức 1, có nhiều chiến thắng hơn bất kỳ đội đua nào khác trừ Ferrari, đồng thời cũng sở hữu rất nhiều chức vô địch cá nhân và đồng đội tại F1. McLaren tổng cộng có 11 chức vô địch cá nhân và 8 chức đồng đội kể từ năm 1966.',
                'brand_content3'=>'Bruce McLaren Motor Racing được sáng lập bởi 1 người New Zealand Bruce McLaren vào năm 1963. Chặng đua đầu tiên của đội diễn ra tại Monaco năm 1966. Tuy nhiên những cuộc đua này tồn tại quá ngắn vì lỗi rò rỉ dầu ở chiếc xe.',
                'brand_description'=>'Năm 1966 và 1967, đội đua chỉ đua với 1 chiếc xe với Bruce là tay lái chính. Ngoài nghĩa vụ đối với các giải Grand Prix, Bruce còn tham gia Can Am Championship bên cạnh người đồng đội Denny Hulme. Bộ đôi này đã giành chiến thắng 5 trong tổng số 6 cuộc đua.

Năm 1968 đội đua bao gồm 2 tay đua trong đó có cả Denny Hulme, ông hoàng F1 lúc bấy giờ và cũng là người đua tại giải Can Am cho McLaren. Bruce đã giành chức vô địch non-championship Race tại Brands Hatch. Sau đó tại Bỉ đã chứng kiến chức vô địch đầu tiên cho đội.',
                'brand_thumbnails'=>'mclaren.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'roll royce',
                'brand_caption'=>'Rolls-Royce là một dòng xe nổi tiếng đến mức hầu như ai cũng biết đến. Tuy nhiên, liệu bạn có biết rằng Hong Kong chính là nơi sở hữu nhiều chiếc xe Rolls-Royce nhất trên thế giới?',
                'brand_content1'=>'Vì nhiều lý do khách quan, đại bản doanh của Rolls-Royce đã chuyển từ thành phố London, Anh sang tiểu bang Indiana, Mỹ. Tại đây, một cơ sở rộng hàng trăm héc-ta với lực lượng lao động lên đến 4.000 người đã giúp cho Mỹ trở thành quốc gia sản xuất nhiều sản phẩm Rolls-Royce nhất trên thế giới. ',
                'brand_content2'=>'Chúng ta thường nhớ đến Rolls-Royce như một thương hiệu lớn nhất thế giới nhưng kể từ khi được thành lập vào năm 1906 cho đến năm 1946, hãng này chỉ sản xuất khung xe và động cơ cùng với sự trợ giúp của công ty Barker & Co để cho ra đời một chiếc xe hoàn chỉnh. The Silver Ghost  - một trong những thiết kế của họ - hiện là chiếc xe đắt giá nhất trên thế giới, vào khoảng 57 triệu USD.',
                'brand_content3'=>'Được thiết kế bởi Charles Robinson Sykes, Spirit of Ecstasy là vật trang điểm trên mũi các xe Rolls-Royce suốt từ năm 1911. Nguồn gốc của nó xuất phát từ mối tình giữa Eleanor Velasco Thornton - một người phụ nữ xinh đẹp, và John Walter Edward-Scott-Montagu - một người thuộc dòng dõi quý tộc Anh quốc và là tổng biên tập của tạp chí Xe Hơi. ',
                'brand_description'=>'John Walter đã nhờ đặt hàng nhà điêu khắc Charles Robinson Sykes một bức tượng để gắn lên chiếc xe Rolls-Royce SIlver Ghost. Nó mô tả một người phụ nữ trẻ, vạt áo tung bay trong gió, nghiêng mình về phía trước và ngón tay trỏ đặt lên môi. Eleanor chính là hình mẫu cho bức tượng mang tên Whisper này.
Giám đốc Rolls-Royce rất thích ý tưởng trên và thông qua Charles Sykes đã biến nó thành biểu tượng của hãng. Mặc dù vậy, vào thời gian đầu, Spirit of Esctasy rất dễ bị hỏng do những va chạm từ phía trước. Sau này, hãng đã thay đổi thiết kế để mỗi khi xảy ra va chạm, bức tượng sẽ tự động chui vào trong thân máy.',
                'brand_thumbnails'=>'rolls-royce.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'audi',
                'brand_caption'=>'Audi là dòng xe hạng sang trứ danh của Đức, thương hiệu xe chủ lực của Volkswagen,  một trong những dòng xe sang khá phổ biến trên thế giới và tại Việt Namxe Audi cũng được rất nhiều đại gia lựa chọn',
                'brand_content1'=>'Audi Q7 – Một trong những dòng SUV gia đình hạng sang bán chạy nhất của Audi, đây thực sự là một huyền thoại.
Các dòng xe của Audi cơ bản đều sang trọng, đắt tiền, kiêu sa và lướt…nhưng vẫn xếp sau BMW và Mercedes.Ngoài ra còn một chi tiết thú vị nữa là cái tên Audi là dịch từ tiếng La tinh tên của nhà sáng lập August “Horch”, và từ này trong tiếng Đức có nghĩa là “nghe”.',
                'brand_content2'=>'Ở Việt Nam các dòng xe Audi khá phổ biến , chúng ta có thể dễ dàng bắt gặp ngoài đường bất kì một chiếc Audi nào, đặc biệt là dòng SUV Audi Q7 và dòng sedan hạng sang Audi A5, đây là 2 dòng xe của Audi được người dùng Việt Nam ưa chuộng nhất.',
                'brand_content3'=>'Giá xe Audi ở Việt Nam khá cao so với mặt bằng chung, định vị khách hàng của Audi cũng giống BMW và Mercedes, trung bình giá thấp nhất của một chiếc Audi bất kì tại Việt Nam tầm 1,3 tỷ đồng trở lên, cao hơn một chiếc Toyota Camry hay một chiếc Honda Accord hạng sang. Và giá chiếc cao nhất vào tầm khoảng 5 tỷ nếu muốn ra biển trắng.',
                'brand_description'=>'Audi hiện không có xưởng lắp ráp hay sản xuất ô tô tại Việt Nam, nếu muốn mua xe, cách duy nhất là cần ra đại lý chính thức của Audi . Các dòng xe của Audi đã chính thức có bán tại Việt Nam là Audi A3, A4, A5, A6, A7, A8, Q3, Q5, Q7, TT…bao gồm cả SUV, SEDAN và siêu xe.',
                'brand_thumbnails'=>'Audi.jpg',
                'created' => $date,'updated'=>$date],
            ['brand_name' => 'hãng khác',
                'brand_caption'=>'Nhiều hãng khác',
                'brand_content1'=>'Nhiều hãng khác',
                'brand_content2'=>'Nhiều hãng khác',
                'brand_content3'=>'Nhiều hãng khác',
                'brand_description'=>'Nhiều hãng khác',
                'brand_thumbnails'=>'blog-img4.jpg',
                'created' => $date,'updated'=>$date],

        ]);
    }
}
