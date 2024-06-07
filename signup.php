<!DOCTYPE html>
<html lang="en">
<?php include_once ('head_common.php') ?>

<body>
    <nav class="w100">
        <div class="nav-main">
            <a class="nav-title" href="index.php">천하제일 단타대회</a>
            <a href="login.php"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;&nbsp;로그인하세요</a>
        </div>
    </nav>

    <div class="page-main w65 flex-c" style="flex-direction: row; align-items: flex-start">
        <div class="w45">
            <h2 class="main-Title">잠시 검문이 있겠습니다.</h2>
            <form action="./aaa.php" method="post">
                <div class="white-div p30 mb20 h500 signup">
                    <div class="form-inner">
                        <div class="form-info">
                            <h4 class="m0 mb15">이메일</h4>
                            <div class="flex-c">
                                <input type="email" id="email-signup" class="input-info" placeholder="이메일을 입력하세요"
                                    name="email-signup" />
                                <i id="f-email-signup" class="fa-solid fa-check fontasm-c" data-clear="0"></i>
                            </div>
                            <p class="text-grey mt5">예) xxx@example.com</p>
                        </div>

                        <div class="form-info">
                            <h4 class="m0 mb15">비밀번호</h4>
                            <div class="flex-c">
                                <input type="password" id="password-signup" class="input-info" placeholder="비밀번호를 입력하세요"
                                    name="password-signup" />
                                <i id="f-password-signup" class="fa-solid fa-check fontasm-c" data-clear="1"></i>
                                <i id="f-show-password-signup" class="fa-regular fa-eye fontasm-v"
                                    data-id="password-signup" data-vnum="0"></i>
                            </div>
                            <p class="text-grey mt5">숫자, 특수문자, 영어 소문자, 대문자들이 포함되어야 합니다.</p>
                        </div>

                        <div class="form-info">
                            <h4 class="m0 mb15">비밀번호 확인</h4>
                            <div class="flex-c">
                                <input type="password" class="input-info" id="confirm-password"
                                    placeholder="비밀번호를 입력하세요" name="confirm-password" />
                                <i id="f-confirm-password" class="fa-solid fa-check fontasm-c" data-clear="2"></i>
                                <i id="f-show-confirm-password" class="fa-regular fa-eye fontasm-v"
                                    data-id="confirm-password" data-vnum="1"></i>
                            </div>
                            <p class="text-grey mt5">비밀번호를 한 번 더 입력하세요.</p>
                        </div>

                        <div class="form-info">
                            <h4 class="m0 mb15">국가</h4>
                            <div class="flex-c">
                                <select name="country" id="country" class="input-info">
                                    <option value="kr">대한민국 - Korea</option>
                                    <option value="sw">스웨덴 - Sweden</option>
                                    <option value="uk">영국 - UK</option>
                                    <option value="us">미국 - US</option>
                                    <option value="jp">일본 - JP</option>
                                    <option value="it">이탈리아 - Italia</option>
                                    <option value="ge">독일 - Germany</option>
                                    <option value="sp">스페인 - Spain</option>
                                    <option value="cn">중국 - China</option>
                                    <option value="br">브라질 - Brazil</option>
                                    <option value="ca">캐나다 - Canada</option>
                                </select>
                            </div>
                            <p class="text-grey mt5">국가를 선택하세요</p>
                        </div>

                        <div class="form-info" style="margin-bottom: 0">
                            <h4 class="m0 mb15">닉네임</h4>
                            <div class="flex-c">
                                <input class="input-info" type="text" id="username-signup" placeholder="닉네임을 입력하세요"
                                    name="username-signup" />
                                <i id="f-username-signup" class="fa-solid fa-check fontasm-c" data-clear="4"></i>
                            </div>
                            <p id="create-username-signup" class="text-grey mt5" style="cursor: pointer">
                                작명이 고민이라면?
                            </p>

                        </div>

                        <div class="form-info" style="margin-bottom: 0">
                            <h4 class="m0 mb15">나의 한 마디</h4>
                            <div class="flex-c">
                                <input class="input-info" type="text" id="determination-signup"
                                    placeholder="나의 각오! (선택)" name="determination-signup" />
                                <i id="f-determination-signup" class="fa-solid fa-check fontasm-c" data-clear="5"></i>
                            </div>
                            <p id="gotoLogin" class="text-grey" style="text-align:right; cursor: pointer">
                                <a>이미 회원이신가요?</a>
                            </p>
                        </div>
                    </div>
                </div>
                <button class="white-div w100" type="submit">가입</button>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
    $('#gotoLogin').click(() => {
        location.href = 'login.php';
    });
    </script>
    <script src="./js/signup.js"></script>
    <script src="./js/login.js"></script>
    <script src="./js/koAliasGen.js"></script>
</body>

</h>