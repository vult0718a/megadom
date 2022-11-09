@extends('user.layout.main')

@section('title')
<title>Làm to Silicone</title>
@endsection

@section('style')
<link rel="stylesheet" type="text/css" href="/user/page/2-2.css">
<style>
  .collapsible {
    background-color: #FFFFFF;
    color: #000000;
    cursor: pointer;
    width: 1266px;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    padding: 22px 109px 23px 30px;

    font-family: 'WorkSans-SemiBold';
    font-style: normal;
    font-weight: 600;
    font-size: 18px;
    line-height: 170%;
    text-align: justify;
    color: #000000;

    display: inline-flex;
    align-items: center;
  }
  
  .collapsible:after {
    content: url(/frontend/images/vector-down.png);
    color: #535353;
    font-weight: bold;
    float: right;
    margin-left: 5px;

    position: absolute;
    right: 369px;
  }
  
  .active:after {
    content: url(/frontend/images/vector-down.png);
    transform: rotate(180deg)
  }
  
  .content {
    padding: 0 18px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #FFFFFF;
    color: #000000;
    width: 1266px;
    margin-bottom: 8px;

    font-family: 'WorkSans-Medium';
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 170%;
    text-align: justify;
    color: #000000;
    padding-left: 30px;
    padding-right: 97px;
  }
  </style>
@endsection

@section('content')
  <div class="screen2-2">
    <div class="banner">
      <p class="text-bold">Phẫu thuật tăng kích cỡ dương vật bằng Silicon</p>
      <div class="vertical"></div>
      <p class="text-medium">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng.</p>
      <p class="text-small">Với sự phát triển của khoa học, đã có rất nhiều phương pháp phẫu thuật làm to dương vật ra đời với nhiều cải tiến về hiệu quả và cả tính an toàn cho nam giới. Tuy nhiên, làm to dương vật bằng thủ thuật đặt Silicon vẫn luôn là phương pháp phổ biến nhất bởi chi phí dễ tiếp cận, hiệu quả cao và sự an toàn của nó.</p>
      <div class="block-contact">
        <p class="call">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</p>
      </div>
    </div>
    <div class="tag">
      <a href="#"><div class="tag-block block-1"><span>Đây Là Phẫu Thuật Gì?</span></div></a>
      <a href="#"><div class="tag-block block-2"><span>Tấm Độn Sinh Học Megaderm</span></div></a>
      <a href="#"><div class="tag-block block-3"><span>Ưu Điểm Của Phương Pháp</span></div></a>
      <a href="#"><div class="tag-block block-4"><span>Ảnh Trước Và Sau Phẫu Thuật</span></div></a>
      <a href="#"><div class="tag-block block-5"><span>Trải Nghiệm Của Khách Hàng</span></div></a>
      <a href="#"><div class="tag-block block-6"><span>Hiệu Quả Của Phương Pháp</span></div></a>
      <a href="#"><div class="tag-block block-7"><span>Quy Trình Phẫu Thuật</span></div></a>
      <a href="#"><div class="tag-block block-8"><span>Lưu Ý</span></div></a>
      <a href="#"><div class="tag-block block-9"><span>Tính Khả Thi Và Những Biến Chứng</span></div></a>
      <a href="#"><div class="tag-block block-10"><span>Ai Nên Thực Hiện Phẫu Thuật</span></div></a>
      <a href="#"><div class="tag-block block-11"><span>Câu Hỏi Thường Gặp</span></div></a>
    </div>
    <div class="concept">
      <div class="concept-top">
        <p class="text-bold">PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG SILICON LÀ GÌ?</p>
        <hr>
        <p class="text-medium concept-text-medium-1">Phẫu thuật tăng kích thước dương vật là một phẫu thuật điều trị ngoại trú nhằm mục đích tăng chiều dài hoặc chu vi của dương vật. Phẫu thuật tăng kích thước dương vật bằng Silicon là hoạt động cấy ghép các miếng độn bằng Silicon y tế với các hình dạng khác nhau vào dưới da để tăng chu vi dương vật cho bệnh nhân, được KFDA chấp thuận về độ an toàn. Thời gian phẫu thuật khá ngắn, trung bình 15-30 phút.</p>
        <iframe id="iframe-3" src=""></iframe>
      </div>
      <div class="concept-bottom">
        <div class="concept-title">
          <p class="text-bold">CÁC LOẠI TẤM ĐỘN SILICON</p>
          <hr>
        </div>
        <div class="concept-left">
          <img id="concept-img-1" src="/frontend/images/home-penile-3x.png">
          <p class="text-title">ỨNG DỤNG CỦA TẤM ĐỘN SILICON TRONG PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT</p>
          <ul class="text-small">
            <li>Tấm độn Silicon đa dạng về hình dáng, kích thước, nam giới có nhiều lựa chọn để phù hợp với dương vật của mình.</li>
            <li>Quy trình đơn giản, có thể dễ dàng đưa tấm độn Silicon và với rất ít biến chứng.</li>
            <li>Có thể dễ dàng lấy miếng Silicon ra dễ dàng bằng một can thiệp tiểu phẫu.</li>
            <li>Ngoài tăng kích thước, tấm động sinh học còn giúp hỗ trợ cải thiện tình trạng xuất tinh sớm, kéo dài thời gian quan hệ.</li>
          </ul>
        </div>
        <div class="concept-right">
          <p class="text-medium">Miếng độn Silicon được sản xuất tại Hàn Quốc với nhiều kích cỡ và hình dạng khác nhau để phù hợp với chu vi dương vật của từng người. Hiện tại có 1 loại hình dạng chính là Ring và T-ring. Chúng được thiết kế với 3 kích cỡ khác nhau là nhỏ, vừa và lớn.</p>
          <p class="text-title title-1">SILICON DẠNG RING</p>
          <ul class="text-small text-small-1">
            <li>Silicon dạng Ring trông giống như một chiếc nhẫn, có 2 loại khác nhau bao gồm loại trơn hay còn được gọi là dạng chữ C; và loại có mấu - hay còn được gọi là dạn hình hoa hướng dương:</li>
            <li>Loại “Ring”: là một vòng hình chữ C, có đầy đủ 3 loại kích thước là small, medium và big. Bề mặt trơn nhẵn sẽ giúp cho phần thân dương vật to một cách tự nhiên, không nổi gồ lên, không sần sùi. Tạo cho người bệnh và bạn tình một cảm giác tự nhiên nhất.</li>
            <li>Loại “Sunflower”: cũng có đầy đủ 3 kích thước khác nhau để phù hợp với kích thước dương vật khác nhau. Trên mặt của vòng có những vùng lượn sóng, sau khi đặt vào thân dương vật thì sẽ tạo cho dương vật hình thù giống như vậy.</li>
          </ul>
          <p class="text-title title-2">SILICON DẠNG T-RING</p>
          <ul class="text-small text-small-2">
            <li>Được coi là một phiên bản nâng cấp từ dạng ring, T-ring được thiết kế có thêm phần đuôi chữ T và cũng có 2 dạng là dạng thẳng và dạng lượn sóng, mỗi dạng này cũng có 3 size khác nhau để phù hợp với kích thước dương vật. So với dạng Ring thì silicon dạng T-ring có ưu điểm là giúp tăng đều về chu vi của dương vật, thẩm mỹ hơn rất nhiều, đồng thời khó bị phát hiện hơn so với loại Ring.</li>
          </ul>
          <img id="concept-img-3" src="/frontend/images/home-penile4.png">
        </div>
      </div>
    </div>
    <div class="booking booking-1">
      <p class="text-semibold">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <div class="booking-block"><span>ĐẶT LỊCH TƯ VẤN</span></div>
    </div>
    <div class="result">
      <div class="result-title">
        <p class="text-bold">KẾT QUẢ TRƯỚC VÀ SAU PHẪU THUẬT</p>
        <hr>
      </div>
      <div class="text-medium text-medium-1">Xem <span>thư viện ảnh trước và sau khi phẫu thuật</span> tăng kích cỡ dương vật của chúng tôi để tìm hiểu xem những kết quả bạn có thể đạt được nếu phẫu thuật.</div>
      <img id="image-1">
      <div class="image-2">
        <img id="image-2" src="">
        <p class="text-bold">HÌNH ẢNH CHỨA YẾU TỐ NHẠY CẢM</p>
        <p class="text-medium">TÔI ĐÃ TRÊN 18 TUỔI</p>
        <a href="#"><div class="confirm"><span>XÁC NHẬN</span></div></a>
      </div>
      <div class="library">THƯ VIỆN HÌNH ẢNH</div>
      <div class="evaluate-title">
        <p class="text-bold">ĐÁNH GIÁ VÀ PHẢN HỒI CỦA BỆNH NHÂN SAU PHẪU THUẬT</p>
        <hr>
      </div>
      <p class="text-medium text-medium-2">Megadom đã giúp hàng trăm bệnh nhân đạt được kích thước dương vật mà họ mong muốn.</p>
      <iframe id="iframe-1" src=""></iframe>
      <div class="text-medium text-medium-3"><span>Bệnh nhân 1:</span> Vốn là Việt Kiều tại Anh Quốc nhưng anh đã vượt qua rất nhiều khó khắn trong thời điểm Covid để trở về Việt Nam làm phẫu thuật tăng kích thước dương vật tại Megadom. Đây là trường hợp rất đặc biệt vì anh phải chi tới 200 triệu tiền vé máy bay một chiều từ Anh về Việt Nam. Khi mới về, anh tiếp tục mất tới 3 tuần để cách ly tập trung và thêm 1 tuần cách ly tại nhà. Chia sẻ về lý do phẫu thuật, anh nói rằng mình và người yêu không hòa hợp trong chuyện chăn gối. Mặc dù người yêu không nói ra nhưng anh nhận ra sự thất vọng và khó chịu từ cô. Đây cũng là nguyên nhân chính dẫn đến sự bất hòa trong mối quan hệ của hai người.</div>
      <div class="effective-title">
        <p class="text-bold">HIỆU QUẢ TĂNG KÍCH THƯỚC CỦA TẤM ĐỘN SILICON</p>
        <hr>
      </div>
      <div class="effective-content">
        <p class="text-medium text-1">Trong số các phương pháp tăng kích thước dương vật tại Megadom thì hiệu quả nhất là phương pháp tăng kích thước bằng tấm độn sinh học Megaderm, kế tiếp đến là tăng kích thước bằng T-ring và cuối cùng là loại Ring.</p>
        <p class="text-medium text-2">Mặc dù hiệu quả tăng kích thước của Silicon không bằng tấm độn sinh học Magaderm nhưng giá thành của phẫu thuật Sillicon lại phải chăng hơn rất nhiều. Nếu bạn chưa đủ kinh phí để phẫu thuật bằng tấm độn sinh học thì Silicon là một lựa chọn tối ưu hơn. Khi so sánh giữa việc đặt bi thì sử dụng Silicon lại tốt hơn rất nhiều.</p>
        <p class="text-medium text-3">Sử dụng Silicon thì thời gian tác dụng của Silicon sẽ kéo dài từ 6-8 năm, việc lấy bỏ tấm Silicon là rất dễ dàng và nhanh chóng.</p>
        <p class="text-medium text-4">Tỷ lệ thành công của phương pháp Silicon là 100%, có một số người bệnh bị kích ứng nhẹ tại chỗ và chỉ cần dùng thuốc là hết.</p>
        <p class="text-medium text-5">Phẫu thuật tăng kích thước dương vật bằng Silicon sẽ tăng chu vi dương vật lên từ 1-3cm tuỳ thuộc vào kích cỡ của Silicon và phụ thuộc vào độ giãn nở của da thân dương vật.</p>
      </div>
      <iframe id="iframe-2" src=""></iframe>
    </div>
    <div class="before-surgery">
      <p class="text-bold-1">Trước phẫu thuật</p>
      <div class="step step-1">
        <p class="text-bold">Bước 1: Gửi câu hỏi và đăng ký tư vấn phẫu thuật tăng kích thước dương vật</p>
        <p class="text-medium">Đầu tiên, chúng tôi yêu cầu bạn gửi câu hỏi về phẫu thuật tăng kích thước dương vật bằng tấm độn Megadom - bạn sẽ được chỉ định đích thân chuyên gia tư vấn hỗ trợ giải đáp các thắc mắc và cung cấp thông tin đầy đủ về quy trình phẫu thuật.</p>
      </div>
      <div class="step step-2">
        <p class="text-bold">Bước 2: Xác định bạn có đủ điều kiện để thực hiện phẫu thuật</p>
        <p class="text-medium">Trong giai đoạn trước phẫu thuật, đội ngũ y tế của chúng tôi sẽ xác định xem bạn có đủ điều kiện để thực hiện phẫu thuật hay không.</p>
      </div>
      <div class="step step-3">
        <p class="text-bold">Bước 3: Tư vấn trực tiếp trước phẫu thuật</p>
        <p class="text-medium">Trong quá trình tư vấn trực tiếp trước phẫu thuật, bác sĩ của Megadom chia sẻ chi tiết về quy trình, các biến chứng tiềm ẩn, rủi ro có thể gặp phải cũng như tất cả các hướng dẫn trước và sau phẫu thuật để quá trình diễn ra thuận lợi nhất.</p>
      </div>
      <div class="left">
        <p class="text-bold-2">Trong phẫu thuật</p>
        <p class="text-medium text-1">Quy trình tăng kích thước dương vật bằng tấm độn Silicon là một phẫu thuật ngoại trú tương đối ngắn (15-30 phút), thường bệnh nhân có thể ra viện ngay sau khi phẫu thuật.</p>
        <p class="text-medium text-2">Trong quá trình thực hiện, bệnh nhân đầu tiên được cạo sạch lông mu và được sát khuẩn bằng Betadin. Dưới đây là quy trình phẫu thuật tăng kích cỡ dương vật bằng tấm độn Silicon tại Megadom:</p>
        <div class="text-medium text-3">
          <p class="left-step step-1"><span>Bước 1:</span> Bệnh nhân được gây tê tại gốc dương vật bằng 2 mũi tiêm gây tê.</p>
          <p class="left-step step-2"><span>Bước 2:</span> Rạch da dương vật gần phía quy đầu dài khoảng 3cm.</p>
          <p class="left-step step-3"><span>Bước 3:</span> Tách rộng tổ chức dưới da thân dương vật xuống phía dưới gốc dương vật</p>
          <p class="left-step step-4"><span>Bước 4:</span> Cầm máu kỹ</p>
          <p class="left-step step-5"><span>Bước 5:</span> Lựa chọn kích thước tấm độn Silicone, đặt tấm độn vào dưới da dương vật.</p>
          <p class="left-step step-6"><span>Bước 6:</span> Khâu cố định tấm độn Silicone</p>
          <p class="left-step step-7"><span>Bước 7:</span> Khâu phục hồi tổ chức dưới da và lớp da thân dương vật</p>
        </div>
      </div>
      <div class="vertical"></div>
      <div class="right">
        <p class="text-bold-3">Sau phẫu thuật</p>
        <p class="text-medium text-1">Bệnh nhân nghỉ ngơi 1 tiếng sau phẫu thuật. Người bệnh có thể ra viện ngay sau đó.</p>
        <p class="text-medium text-2">Đối với người bệnh thì phẫu thuật này chỉ giống như phẫu thuật cắt da bao quy đầu. Rất đơn giản và nhẹ nhàng, không đau, sau phẫu thuật người bệnh đi đứng bình thường.</p>
      </div>
    </div>
    <div class="note">
      <div class="note-title">
        <p class="text-bold">NHỮNG LƯU Ý HẬU PHẪU THUẬT TĂNG KÍCH THƯỚC DƯƠNG VẬT BẰNG TẤM ĐỘN SILICON</p>
        <hr>
      </div>
      <div class="text">
        <p class="text-medium text-1">Sau khi phẫu thuật, bệnh nhân có thể sinh hoạt bình thường.</p>
        <p class="text-medium text-2">Bệnh nhân nên mặc quần áo và quần lót rộng rãi trong vài tuần đầu tiên.</p>
        <p class="text-medium text-3">Sau 2 tuần, bệnh nhân có thể quan hệ tình dục.</p>
      </div>
      <img id="image-3" src="/frontend/images/home-penile-8.png">
    </div>
    <div class="booking booking-2">
      <p class="text-semibold">Megadom sẽ giúp bạn đạt được những ước nguyện của một người đàn ông lý tưởng! </p>
      <div class="booking-block"><span>ĐẶT LỊCH TƯ VẤN</span></div>
    </div>
    <div class="feasibility">
      <div class="feasibility-title">
        <p class="text-bold">TÍNH KHẢ THI VÀ NHỮNG BIẾN CHỨNG</p>
        <hr>
      </div>
      <div class="vertical"></div>
      <div class="text">
        <p class="text-medium text-1"><span>Tỷ Lệ Đào Thải:</span> Silicon là vật liệu bên ngoài (không phải vật liệu tự thân giống Megaderm) nên vẫn có khả năng bị đào thải.</p>
        <p class="text-medium text-2"><span>Thẩm Mỹ:</span> Giữ 2 loại Ring và T-ring thì Silicon T-ring sẽ giúp tăng kích thước dương vật đều hơn và khó bị phát hiện hơn.</p>
        <p class="text-medium text-3"><span>Hậu Phẫu Thuật:</span> Vì silicon là vật liệu bên ngoài nên mới đầu có thể gây cảm giác hơi kích ứng. Tuy nhiên cảm giác này sẽ dần biến mất theo thời gian khi miếng độn ổn định đúng vị trí.</p>
        <p class="text-medium text-4"><span>Tác Dụng Về Lâu Dài:</span> Sau khi phẫu thuật làm to bằng Silicon, bệnh nhân sẽ giảm cảm giác tiếp xúc da, điều này không phải là nhược điểm mà là lợi thế giúp các nam giới kéo dài thời gian quan hệ. Đồng thời đây cũng là một phương án giúp điều trị rối loạn xuất tinh sớm ở đàn ông. Thời gian tác dụng của silicon sẽ kéo dài từ 6-8 năm, việc lấy bỏ tấm silicon khi bạn không thích là rất dễ dàng và nhanh chóng.</p>
      </div>
      <img id="image-3" src="/frontend/images/home-penile-8.png">
    </div>
    <div class="when">
      <div class="when-title">
        <p class="text-bold">KHI NÀO THÌ BẠN NÊN THỰC HIỆN PHẪU THUẬT<span> TĂNG KÍCH THƯỚC DƯƠNG VẬT</span></p>
        <hr>
      </div>
      <img id="image-3" src="/frontend/images/home-penile-8.png">
      <p class="text-medium note">Những nam giới có nhu cầu cải thiện kích thước dương vật hoặc có bệnh lý gây kích thước dương vật nhỏ dưới chuẩn thì có thể phẫu thuật tăng kích thước dương vật bằng tấm độn Silicon:</p>
      <div class="vertical"></div>
      <ul class="text-small">
        <li>Người có kích thước dương vật quá nhỏ so với bình thường. Theo dữ liệu thống kê từ 14594 nam giới Việt Nam công bố vào năm 2021, chu vi dương vật trung bình của nam giới Việt Nam là 8.16cm.</li>
        <li>Người có kích thước dương vật không tương xứng với cơ thể (cơ thể quá to nhưng dương vật lại quá nhỏ). Nhiều người béo phì và béo bụng còn khiến dương vật ngắn và dương vật bị vùi vào trong.</li>
        <li>Các trường hợp bị chấn thương, ảnh hưởng đến hình dạng và kích thước của dương vật.</li>
        <li>Người có kích thước dương vật ở mức bình thường nhưng vẫn có cảm giác thiếu tự tin trước đối phương.</li>
        <li>Người bị xuất tinh sớm nhưng không muốn sử dụng thuốc.</li>
      </ul>
      <div class="contact-specialist"><span>LIÊN HỆ CHUYÊN GIA</span></div>
    </div>
    <div class="qa">
      <div class="qa-title">
        <p class="text-bold">CÂU HỎI THƯỜNG GẶP</p>
        <hr>
      </div>
      <div class="qa-content">
        <button class="collapsible">Phương pháp đặt miếng độn Megaderm/Silicon có biến chứng gì không?</button>
        <div class="content">
          <p>Dù là một phẫu thuật nhỏ nhưng vẫn là 1 loại phẫu thuật y khoa, bắt buộc phải được thực hiện bởi bác sĩ có tay nghề và kinh nghiệm. Đã là phẫu thuật, sẽ không tránh được một số biến chứng có thể xảy ra như: Chảy máu vết mổ, nhiễm trùng vết mổ, sưng nề tại vết mổ... Những biến chứng này đều có thể hạn chế được tối đa nhờ vào kỹ thuật và kinh nghiệm của bác sĩ phẫu thuật. Trong trường hợp hãn hữu có xảy ra thì đều có những phương pháp khắc phục ngay sau đó.</p>
        </div>
        <button class="collapsible">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon thì có ảnh hưởng gì đến khả năng sinh con hay không?</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm và miếng độn Silicon có ảnh hưởng gì đến độ cương cứng của dương vật không?</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Phẫu thuật tăng kích thước dương vật bằng tấm độn sinh học Megaderm có đau không?</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Các phương pháp tăng kích thước dương vật khác thì sao (tiêm mỡ tự thân, tiêm Filler)?</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Liệu có phương pháp tăng kích thước dương vật không phẫu thuật hiệu quả không?</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Nếu trường hợp phẫu thuật xảy ra các biến chứng không mong muốn thì sao?</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
        <button class="collapsible">Phương pháp phẫu thuật Penuma</button>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
      <div class="block-white"></div>
      <div class="footer footer2-1">
        <div class="footer-top">
          <div class="contact">
            <img src="/frontend/images/rectangle77.png">
            <div class="block-contact">
              <p class="call">LIÊN HỆ CHÚNG TÔI NGAY HÔM NAY</p>
            </div>
            <p class="number">098 534 2323</p>
          </div>
          <img id="image-1" src="/frontend/images/lcbio.png">
          <img id="image-2" src="/frontend/images/image10.png">
          <img id="image-3" src="/frontend/images/ducphuc.png">
          <img id="image-4" src="/frontend/images/daihocy .png">
        </div>
        <div class="footer-bottom">
          <div class="text-left">
            <p class="text-1">VỀ MEGADOM</p>
            <a href="{{ route('doctor') }}"><p class="text-2">ĐỘI NGŨ BÁC SĨ</p></a>
            <p class="text-3">PHẪU THUẬT TĂNG KÍCH THƯỚC</p>
            <p class="text-4">PHẪU THUẬT KÉO DÀI</p>
            <a href="{{ route('library') }}"><p class="text-5">THƯ VIỆN</p></a>
          </div>
          <div class="text-right">
            <p class="text-1">LỜI CHỨNG THỰC</p>
            <p class="text-2">CÂU CHUYỆN KHÁCH HÀNG</p>
            <p class="text-3">TIN TỨC</p>
            <p class="text-4">LIÊN HỆ</p>
          </div>
          <img id="logo" src="/frontend/images/logo-megadom-2.png">
          <p class="phone-number"><span>Điện thoại</span>098 534 2323</p>
          <p class="address"><span>Tầng 2, Bệnh viện Đức Phúc- Số 48 P. Ô Đồng Lâm, Phương Liên, Đống Đa, Hà Nội</p>
          <img id="image-1" src="/frontend/images/fb.png">
          <img id="image-2" src="/frontend/images/zl.png">
          <img id="image-3" src="/frontend/images/ig.png">
          <img id="image-4" src="/frontend/images/yt.png">
          <div class="members">
            <img id="image-5" src="/frontend/images/user.png">
            <div class="member-lr">
              <img id="image-5-1" src="/frontend/images/user-1.png">
              <img id="image-5-2" src="/frontend/images/user-2.png">
            </div>
          </div>
          <div class="footer-end"><p>Ⓒ 2022 drmegadom.com — All rights reserved</p></div>
        </div>
      </div>

    </div>
    
  </div>

<script>
  var coll = document.getElementsByClassName("collapsible");
  var i;
  
  for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var content = this.nextElementSibling;
      if (content.style.maxHeight){
        content.style.maxHeight = null;
      } else {
        content.style.maxHeight = content.scrollHeight + "px";
      } 
    });
  }
  </script>
@endsection