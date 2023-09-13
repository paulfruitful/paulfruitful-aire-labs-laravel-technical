<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data=[
        ['key'=>0,'text' =>'“You made it so simple.”','stars'=>4, 'image'=>'https://th.bing.com/th/id/OIP.Bx6L39my2uA2X7HFbTSytAHaKp?w=141&h=189&c=7&r=0&o=5&pid=1.7', 'name'=>'Brian Krotesty','role'=>'Consultant'],
        ['key'=>1,'text'=>'“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”', 'image'=>'https://th.bing.com/th/id/OIP.laWQTdTqiPrejvj5m13ZnQHaIc?w=174&h=198&c=7&r=0&o=5&pid=1.7', 'name'=>'Alexa Popen', 'role'=>'CEO', 'stars'=>5],
        ['key'=>2,'text'=>'“You made it so simple. My new site is so much faster and easier to work with than my old site. I just choose the page, make the change & it is a good channel for us.”', 'image'=>'data:image/jpeg;base64,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', 'name'=>'Jake Kren', 'role'=>'CEO', 'stars'=>5],
        ['key'=>3,'text' =>'“You made it so simple.”','stars'=>4, 'image'=>'https://th.bing.com/th?q=Random+Guy+Pic&w=120&h=120&c=1&rs=1&qlt=90&cb=1&pid=InlineBlock&mkt=en-WW&cc=NG&setlang=en&adlt=moderate&t=1&mw=247', 'name'=>'Jackson Cray','role'=>'Consultant'],
        ['key'=>4,'text' =>'“You made it so simple.”','stars'=>4, 'image'=>'https://th.bing.com/th/id/OIP.O04oqzX_nVxg5iKkjtVmfQHaLH?w=142&h=213&c=7&r=0&o=5&pid=1.7', 'name'=>'Susan Given','role'=>'Consultant'],
        ['key'=>5,'text' =>'“You made it so simple.”','stars'=>4, 'image'=>'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAsJCQcJCQcJCQkJCwkJCQkJCQsJCwsMCwsLDA0QDBEODQ4MEhkSJRodJR0ZHxwpKRYlNzU2GioyPi0pMBk7IRP/2wBDAQcICAsJCxULCxUsHRkdLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCwsLCz/wAARCAC6AOUDASIAAhEBAxEB/8QAHAAAAgIDAQEAAAAAAAAAAAAABAUCAwABBgcI/8QAORAAAQMDAwIFAgUDAwQDAQAAAQIDEQAEIRIxQQVREyJhcYEyoQYUkbHBQlLRI+HwFTNi8QeCstL/xAAUAQEAAAAAAAAAAAAAAAAAAAAA/8QAFBEBAAAAAAAAAAAAAAAAAAAAAP/aAAwDAQACEQMRAD8A8irKyK3BoNgbiB81kEbVsAzPH29q2BOByMetBYEgpBwBuZzHGwrIZRBhSjBgE6U/MSak3q0qCgqJj2xO9bKQoR/UneBke47eooK1LVHlSlAiQEj+TJ+9U7nPvNXaHEajEApJBGUmq8Hj5BoNlCjOMpMGpBtZAWlKt9xkfatLCsHzQoAgxia2hBjjVIgDcjvNBc35/KrCuJ2PpmtBBBIJKSDHlyDPoakltyZ0qOPMN49aJ8MOKRpETp3PIoBYWMAgxuDkKFSKW3B9Jk7gHPxNWOISFEJOBAnOYxIqvziSRrE570FQSoSEqKh25+U1FSSR5Sk8+oq+Ekk6pATqCtj2gxVDgWBrgAGMjae4oD+jaV3SmuVtkpB5KTMD70/VaROK5ro9wm36lZLX9C3UtOcQlw6Z+MH4r0dyzicUHMm09Kj+U7iugVaQdvtUTa+n2oEP5T0rPyp7U9/K+n2rX5X0+1AhNr6VA2u+Kfm29KrVbUHPKtt8UM5b74ro122NqEct/Sg5t233xQa2yk+ldC8xvS19negW1lTU2QSKyg2Gzj9cg/xVqWicj+TH2q1pMcxG+9EtKDioQNcblOr+KAItKTk/Pt3qQZcIUUFR0jVGDj9qdJbZUQFoSkmI1Jg+/mINYtAYUkot0hsKSVBICdaNiJTJn5oFKUoKVAgtuAAiMtqjuPqFaLepIP8AUMJUDIjsYpk7YqS66mVEBQ8NYSAlSFDUCT6iqg0EaYJSTGo7EKGIoAE6oII1A6gpP9M9xWgzqykEiOMwe1GeCQsoJEk47e1GtWk6VEcweJ96BUlh1KkqBIKQkGR6czR7ds26kFAZS7AGlJwqP7QQIPpNMhb4ERtzzVLjKVeZKfDcG+knSr/BoBF2l40pKlNuFoyJ0mIB+M1NKAQFJAE+Vzuk+g3g0QHLpICStYAAAI3ArWVROTwSB9iKAN5pIEgiSOxn/FCuIxgQonHaOSTTJaJiR87UI6gwoacDIE0ACoSA22ZMhayOVf2g9hxQ6pyP6fqHbNFaSVdo2+apUQlUHifvjFAOMGeR+9e32aBdWFhcjP5i1t3gQP720q2rxPTJXEwAo53MV65c9YdtrS16f08Br8lb21rdXAhSi+2whS22VKwAmYJjftGQPXa74qhVtHFK/wAOfiF29v1dMvFlwvBarN1ZlzUgFehZ51CSD6RzjrFsb0Cb8v6Vo247U1LNRLPpQKTbjtVSmPSnBaqtTXpQI3LcZxQbrAg4p861vigHm98UHPPs70quGt66O4b3pRcN70CBbfmOKyi1o8xrKAdnScqkkR6famLcqGmdIMCYk0ttyZAjHz+9NWkncEgenb1oJpsylSVAzkSYMj/7HNMUMAg6kiE88k+s1WyVEjgCAMcmiwJkSJPcxQVraacaA0DU1KSf/AnyxA4yKHVYIUkkTIA+Ypi02Ao7+YEEcEHei20oAgAgekSfSg51doJ8wMcEDYj1q9lEYM/M02dt0GTVCWCJJ5ONp+aCKWwRHO/+1DvMiTg49KbMWq1gAYA375q5yyAgkeg/4M0HNKRpxB+KrAAV3BEEHg+lNrm20zA37ZpcWiSff5oKiJkbH+O9UuNnSdu9GhlwiYJ05BAz+lRcbwJTk/vQJHG1AkwMjilz583r96fraMkRjge9I7tCm3IPBO+9BW0pQcRABUoxB7muvdDrHSvBSSVrCkjMwFHUs/OBXNdHZD9/bJP0oKnFSJgJFdY8UrWpGtIQlIBRGZ3lRoEfRH3Gut9GczrbvbOe4HjJSR+hIr3J1kBSvcivGTbN29306/ZKSlq7ty8AdocSqftXubzYJV7kyPU0ClTW9QLYo1SN6qKRQCFuqlt0aU1StO9Audb3pe8jem7qd6AeSM0CO4RvSa5RvT+4TvSW5H1UCNafMayrXB5jWUCe2OxJP/O9OmVAhMEcHFIWVQUztFN7YnB49KBo2YiffFGIExzjegW0hRBED5/emLBSCEk9t9qAtCNURO0bftFGs26iBIx34/SJqNulBgQSe449acW6UKRBMKIEGZJ9IoF6mWtjBiqxbhagmBknjtTZduySSF7AYkZJPoP5rEo0A6YAwTgH96DLXpyUI8R0hLeAQiCoDuffih71xlKilpMCcCdhxFbculEhAJI9CRE80G9qVJVHAoF75SokcmYPxVKLIqIVkjgxiaubbK385SDnsPSiLu/tLBtSnlAGPImB543G9AKUst+UlIj15pbcPWxUUhSSRvG4+KTdS6w6+4rQVIKicBUEjadKdvSgLe26ldrQSpaWgcqUowkDsN6B8UgqHbP/ALpT1e1OlDyAMYUBvHemwaKNKUqkAfPzU1NIcbWhyCFCDig5rpL3g3UxJW2pCQN9UhQ/anpcK1LLyHG1qlQM4jjB/wA0lVaLsrptw5Q26lU7SmZFdJ1VlN30xFwhwoctghMDGtDigkpP7igW9KLt09c2qZV4jL5PIASkmcdq916e+LvpnSroKn8xYWjpMzJU0mfvNeLW9hddJ6c5ftGbp8BtJScN6lBIRjnMmvV/wlqH4b6SytWpdql6zWe5ZdWnP2oGLg7VSQKJXvVBoKiBVKwM1eaqXQBO80veG9MneaXvc0Ce45pLdCNVPLic0kuuaBM59ZrKxz6zWUHOAlCoIIKSQQe9NLVyYjMD96Hu2luDxwArgqSADj+4CqbZ0pWE/wB1B09sdRAgxAmd6cNNIASQkGI+n+aW9LAX9Q2AFdA0lA2AjPtNBFDujG0DHaimrpQ06TB5O/7VWu31AxuAPYe9aBS19ekEQRBBx8UB6LlxYJKyd8nfPNVC5TqhaiVbQP5qCnWAiUqEqAHl70vUpt1wICzMEynffk0DUBBUCYg5x+1UXjzQ1AnQlKSSSQBgbTQDz91aylRUtAESBXM9X6pcvKS20lYSASoHCMwMkZ+9A56j1q2s2HPyw1LKdJWSNCVKEQDyr2rkV/8AWepurU3bXTyyjWYStR0KBIVAEZg1QrxFKY1S+spUuFFRbbSSQkEfBJpu4rq3VTbofuVBLLXgMhlttkIa/tlPmI9DQLX7IWLz7Dt2yt5Ns0vTYq8aHnQFFhSwNMomFwTBESYoixHUEkKKylJwUmc+42+1OLbpFlao1LAU6NJ1EzpI9a3o1rGiAkfSkbUBFs2o6SoCT2/ernmQgEgb5FFW1uuATvAEVK6QNJBTBGQe9BzPUwPCWocJjG04NW2q1Xdowz4mkKUw4TvlG4IqvqAPg3CR/aaH6M8EhCVkQ2qVT/asUHWvuIfaZt2mv9JjwwgH+o6pKlevNdz+EyT0YkD/AEzf3/hHhSQ5pJHpM1xfSbDqPXrg2nTyG7dGhV5eK06bZCttKZkrMHTx+lepW9jbWFrbWdqjQxbNJaaTuYHKj3OST3NAMsZNUmi3EVQpNAMcTVKqKUnFDrSaAN7ml72xpk6Dml7wOaBPc7GktzzTu5G9JLob0CZweY1lbc+o1lAqUp61WW3Rg/QsDyqT7UI8kIWh5H0kg42B3rqG2GLpssvJBSoYPKT3Sa5/qFu7aOPWy9kkQeFJ3Soe9AyHUfyluy4galqzOAAAOa0n8UX0/Q2kxBKU7mZmKCtUt3FoEuJnwllPxU3VNstEMMp8UkJClAKI7mDQFO/iK/VgXOCB9KVJO0Z1CKgx1TqlyLnww64WLZy4uFoJJbZQQCo52Ej9aosTbttvIuemLufFgFaXi2sZkFOCKKU112+QlD7pbtoBCEIbStSUnyhwtpTJGN6Cl/qPVrV0suOQoQdK1BRIP9xTie9G2PVyHGFGdQISvgGeIpXcWKUOefWonKlKJJJ5zVloyl19ppCTAIk7mg78W7/UGCpCQQcck55rjuq9PurVxxJSrTqx616h+GUoS23bOEEaQmTEEx60L+I+mtocJKAQZ4nfFB5Sh4JhOjSYgkAyY2prYlwxAmfcTRz3TGmzrCQQDmYoq2YaAGkRmIG3eggGVvQDzxxRdv09CSFEdue3pRLTfAwe/FFpQRA9vXNBNptKUjbG0Up6m4ATBAO2KZrJSkiTnknn0rn+ouhStPrQK7lJcRcJG6hFLbMhDypEBSFswnuQY+aaqEgiN8UCpHh6/Kk7qkb9/v8AxQE/hr8QX34b6kb1hAeStpVtdMOKUlD7c6gNQmFAiUmD969Q6L/8kdC6tcN2l5bu9OefXotnHXUO2zijsguAJKVHgFMevfxooClqI5M53BrQR51N5BWPEbI4WM49t6D6VT4NwjxLdxp5uSNbK0uJwYOUEiqVtEEyIivA7W7vSr8wy66y+r/vKYWtslwGFGUEb7n/AIabW/4j/FbOkJ6x1CAdMLfW4Mbf9yaD19aI4nFDLRvXnaPxT+LCAlXUVqyDLjTCvfdFEJ/Ev4jVlVygzyWGB6cIoOxdTvS54b4rn19e68oGX0/DLP8A/NBu9U6s5hdy57IhH/4AoG1ylXY8xSK6AGqYH6UI87cOSVrWoz/UpR/c0teKs0E3I1HI/WspasnUaygd2Z+mr+r2Cby1beThbHkWqCYaMnUYzCT+/pQ1oRIrobQpIhQBSQUlJ2IIgg0HEWiPy7rzChhYSoHgxgxRgtgo7TBOwoq9sGrVxxgKIWwpTtsVn62lDUESPTb2qyyWlZTBEEEidjPagoabLZGI2xG3NMGgpScg7bcUem1acAjmONqIatEJiRj96BC/ZlwnGTERVtpYt260E/VMk+tPVMITJ08T3PzFAvJAOqDj5AzQPem3QZdaWCeBJGBHc0/6ylF3aoWMiIxMHFcfZLCtG5GZ5HvXaW6PzHTXMSW0gwdvckUHAXLa29QVxx6e1VWjiCopnv79qadTaMKOnUZhPGaXPdOetw1co1FJP+okb6TQMUAbbj9qIQkAj5jPNCteIkJxMgEHfBq/VuBjj1oKbtYSkmcnf44rm3163VK/SnN8rgf+WO5IpIoSs4xQawRPbtVDjf8A3lEggoM8RB7+1EAiY0kmduCDmoOpcVqEIgK521acJVtg0CttCQ88iQTGocggY3rHminSoE+WCD2rTRH5tAj6krE5BOATv8ij1tyBI3xPvQUWZT+Z1RhxPiCIO48wMg9v/fDpthpZXGNQSRG3akrafCdZWZPhuwRvKTkiN8xHz6yGjSy2sCfp8ioIM5I4xQNGrJM8RGCBvBo1rp5Vjvt/7oW3uwIk5HqNqYt3qE7ECPigrV01Z2g7fHFDOdOdRMiB7UxHUU5EAAEHHPeqXr9KiY4APoc0Cd2ycAMjfallxaqE4H+1OLi7mYOcj0/SlNzcKVOedvSgUOMnUdqyprcOo1lAfaf00/szt8Vz9rxT+04+KDXW+nruWm7hDa3A2gIfQ2JWEAylaQMmJM1zKFItloDbmtElQyDAO4kV6NakjTV930XpvU7e4aVbWybl1tSWbjwkhbbpHlVqSJ339KDj7W7JAgkEkQcT7U6YcDgkjP8AHtXDpdds3nGnQQptxTagQZCknScKzTyy6gDpheZyBGeKDolBMEqj0Hel9y0khQAiRGP5q1FwlQEGZ5nH3qfmcUlKSAqRJgEEds0Gum2q0MNOEHC3EkK/t1QK6vpT6ENXDThhDjcEnMHgxXMXV4vprQUsQ1EhasI7kFXftQrX4p6a6lSUOIS5qEpUpMH2VQM78Nw8VwlAnO0x2pTe9UZLCkJWhKQnOpQEADJM0r6v1f8AMNpIWClJUUhJx8muMub24uFQpRCASQgEx7nvQeqdNW1eWrDic+VMAYO3MVNxlIx329Irlvw91DwLdtBKoSfNzsZNOnOqIGoKCSAFFChI1JJEb99tv9grvWzuMke/bvSZSSCVGc/v6UebwOqOqRJkJ4STicVRcIGnymTMkzj4NAEpSm1tCJ1kAHMidpqt1xRTclXkEJMd0jIq1flAcCfMEYBzEkAyf1FBXDifEdAUotqSkHSZkBW/t6UAjZBvLYATlZCoH0lO+aciCB7UnYShV4PDJ8G2ahEbArGR+9OW40g8GgEuEkCY+o9gqSDMRB39qLCFpDZUCFKZaXBBByIkyAcweB7RUH0hTagQMg7+3ritsKWpDSlJCStDiglKNCQPEJwISnnhIFBMLWkyZ+eaIQ+TAnjvUFthcHbA/ahVpdaMjIoGPiqI395NZ4pIJJnEZxS5t8/T6+9FIOoH3nP+KCDiiSYO+9BPaqZqbShMq7E0tfMk/NACqJODWVitzvWUDO1GRT614rnmX2WgC4sJjjcn2Ao1HWWm48JhSyOXFaB+iZP3oOxtZxNOrY7eledo/EvUUK/07e1PZOh1RPphc06s/wATdUVp19KZjk/mFtE+wUlR+1At/HXTE29+zfoSA1fohWZUbloedXyCmuTYdW2o5IBO47V6F1/qC+r9LXaJ6alLwW2804q6BKFo4T/pjcEjJrz922ftl6H21tKI8uozq58qk+U/rQO7W7kAajj0/wBqfWjklCieAokdq4u2d0qT2JiAQMg810jF0gJ0pcT4igrSkGDABPm/igP66pm6sFtKAOsAEHzeoKRO9ecfkHkqUoHyJ1EqAJwDp9p7Ca7R59bzLKlnS2tYEAJIc8PJyMRmKDt7E3MBaghtJBkqCEpSZBWobTGBIoOSfVcIShpZwn6e5FF21gtxCXENagqEkEzqVg4gbd/aurfs/wAINlsOG5dLcjU3AbJGZGOec0uu+vW1vLdshtttGpLbTSE6vck7UEWLRTaQdKkglMoSJgFMHUTvFWOXDdqlIcdQ2gYbC8qIAiBMn/npSZ3q/VbxRDUoncpyr0zEfarrXppzc3q1KdWJSlRJUEnlU5mgbMuId0uIM6gI158o4/xU31DTn6SMYMR6iqmA23CG4GwTqgfc1YPOvc6QCognUkmI05oAnXVkLAJJSCsoUJ1JkJOew3+PWgi54aA6Z0HxEkEwoeaTvwcirbhxKF+HpgjXrB3CSYB/iostruHxrALTSkqcA21CYHbMSaCdswW2vEWkJW8rxSBulJwE5zTBsQlI78+9QVpnnvnmrGhmZ/T70EnEgjSTkiD2oRlWnwE/2F9tWxIhYgGBO3c87DdRhgyfSM7xQxz4RPCnoGcJK5wCrbfZIG+5mANbklIGB67USWgpBEb49NqEZOwPMD9ad21sVoSD6mdh7GgRKtCkzECeP80VbMyYx3k8RRF0UpX4aIKiSnBwKIShLFvJ3WOd47GgV3i8lI2J+3albm5Joq5c1OYOJJ9TQbpme1AKowTWVFRMnmsoKWjkTv35piw2FRq/Qf5pazGN/imlslxZESPvQN7bQgBKUgAZxApkyokiBmljbbqIJJ2n1/SiUOqTpO/b/M0DpDhAEpG3PNV3DNrctrQ60hSVbiJSrETHehm7gEASJwD/ALTVniHzcE9qDn7zobjSi7YedKMllZ8+39BO/saUuXCmVhSisQpKVpSogzuUnYj1rsy6kkBe5EBQx+tD3nTLHqKNL6f9UCW32oS4Pfg/NBxKr9xKW0JSpwpB05IGTJJHrUjddauiAhOlPoBHudW5+Kl1Dp1z0x06k6mgRDomCTwocGqGupPtKxBAIwoduxoCU9F6rc+d54RBJ1KJIHonarG+hobWPFcBSlQmRAOK1/1y5CIBPMwE7H1NLLjqV++Vanl6Sdk4x8UHSBNjajSnRqIkfxjeogl0iFZPJrmGfzji4b1qOVGPWunsLV9KUqcMnEz3PAoJqaeQ2V5iRMZkVUi4XE6eSlKSc03BShJBKeDE9+KRXimkE6BG6wnVAwckYGORQC3i5WUIAU46EoQAtJJClf1AzHbf9qY2jKbdhtsmVaQXDmVKjNL7BklarpyDBUGJ3knSVf4pkV/eg24U8bDtufapImBGOYqnVq3z71MKAG9BaVH9cSaG2KBmCnVyASrJMaU+nf3MTUlOQlSsjSkk+kDeq1+VbUp0wwgAGMgDfAiN9lEczmEgWwR4iBv5hjb2p671Fu2a0NkFwiJH90fxXNNLUkJWkypYhsZ2/u+eKOtbZSl+I6Sc8xvQH2bZWVPu78TmBWXz0JIG0bfFTW+G0FIxAgR60nu39ZUZkHbP8bUAqlSSZqhxWDWte/2qpxZzQUqUZO9ZVK1eY1lBFle1MWbgoggwcZH+1JG3CKJS7GZxQP0X7pI1GRzOxo9t4OQqYx34rmWnTvijmLggjOwifegeFyCODgjO57USh4KCQd/pk52xScPhQMED34q0PKiQTMj22igOcd0k5kVY3dFIG5HFLF3AWACcpkZMRjYVWl9SCPNKZ5oGl14V02pCwFBSSkhQkKT2UK5B/p6mXlpAlsmE6h5h6Gn3j5JB83vg/rVbykPAqxqAyOZoFCenIcGCdpI9t6sb6ZbpGpadek6o1RIkYipPlxjzgFTUHVH1JOM+1UC9kEA5UogQcSc80Dxh2ySClplKYWABpAIUEgYqJu0N6ZI05MkzHG1IPzqgSCYPcmBO52qpV1IIEqJgDcz3NA3e6lpTKTKSMhJ2jMUta1Xjutc+EknUVEyqZhIjmqWmluEF0lKNtP8AUoHijkrSlIQgBKRgAbCgLBQkJSkAJAASBgAdhWyoGhfErYc7/pQEhUZrZcoUuftWi4e9BY87KdA3WpKBuTKjE4qLr6V3GiSUnUVHaUlalTM8/wDM5IynJdbO4QdWI4zyD+1VNqm4cMQAEJIP/ikCgfsOBR1KCZwABgDgAUw8cJBg8bYpIy4Bk1Y4/wAYHzQEvXClznaf1oBx3UN9qit05z6UO4vbO/rQT1jNUOL3rSliKHWvegipeTWUOpeayghViV1XWUBjbgBz7UQlzODzS5O6aIR9SfmgZtvkbmrhcCIpanc1aOKAtbx75qIemc0Ir/Fa5TQFl8gjOO/arPHkSNxQKpgfP71pE/egNLwnf39aW3LAkuM4BOpSBsD3TV7m6K1wfagXoCCR4kx9vmi0loDyAD15/WhnPrX71jXPvQF6hW9VUVugu8T1rfi1QK13oCPEmoqcxVPf2rR/igmDJM5BBmY5xzUW1AuOK/uWT257VpMyfYfuKg3/ADQMUvAAQf1qJdzM0ONq1waC8u1StyagearVQSU5VClk1o81GgysrKyg/9k=', 'name'=>'Eric Ray','role'=>'Consultant'],
       
        ];
    return view('welcome')->with('data',$data);
});
