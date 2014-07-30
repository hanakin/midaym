# Mino Re-Envisioned <small>Creating PHPBB theme based on Sugar3</small>
- Michael Miday
- midaym
- 2014-01-28
- Projects
- navy
- published

 Its taken this long but since my last post I have been hard at work on the front page for the new theme **[Mino](https://github.com/hanakin/mino)** for PHPBB. While I am far from finished and this is just the first very small step towards finishing this endevour joinme as I outline exactly what Mino is and why I made the choices I have for this undertaking.

##Project requirements

So I introduced this project first back in April of last year and most of what is said their is still true. To reiterate here they are

*   HTML5 & CSS3 - Ensure everything is compliant, semantic and clean using the latest code base
*   Responsive - The theme needs to work on all devices seamlessly.
*   Mobile First - Agree with it or not its a proven fact that especially when referring to application design this is the only way to do things.
*   [LESS][2] - I am a less user so this is what I will be using. But the theme really needs to have some sort of preprocessing framework associated for legitimate designers to come on board.
*   Font base Icons - leverage these to reduce http requests and provide better support for retina based devices.
*   [Sugar3][4] - leverage a framework that was specifically built to be dynamically scalable for web application usage.
    *   [Normalize.css][1] - Utilize a proper reset
    *   [Idiomatic][5] - Employ explicit documentation and coding requirements.
    *   [Atomic Design][6] - employ atomic design principles to reduce css bloat and increase modularity.
    *   Grid - Adhere to some sort of grid system.
    *   [SMACSS][3] - Have some sort of structure to the development version as well as the final rendered css.
        *   Minified - Serve production only version of the css.
        *   Division of Labor - Break up the css into dynamic parts.
* Flat Design - This one is not really a feature but rather the type of design that was used.

##Whys and Why Nots

The current version of prosilver is not responsive which is a growing requirement these days with the mobile devices taking up a substantial part of the market share. While the current dev branch of the theme adds in some responsive aspects. It does so on top of the prosilver codebase, and quite poorly from a design stand point.

This leads to our next reason. Old truncated code base that is deprecated and fastly dying. The structure is absurd and not intuitive to navigate, both the HTML and the CSS. Furthermore the separation of the template files themselves is assigning. Their is so much code bloat in every facet the page loads are horrific on larger boards. Especially if they are using a theme that is highly modified yet based on prosilver. This intern intimidate designers and front-end developers from making themes for the software package.

We need a completely new codebase and a structure that lends it self intuitively to those who work in the industry rather than the current focus which is novice based. The software has become stunted under the current path of building for the novice as no self respecting designer/front-end dev wants anything to do with it. The arguments are always against wordpress for its ugly codebase when it comes to php, however the themeing is extremely easy and customizable yet structured appropriately to benefit the developer/designer.

Third is the maintenance. The current theme is just not maintainable over time. It was never built to be modular in nature and to reuse code. Because of this we have a hodgepodge of css that is spidered throughout numerous files containing several duplications of effort and ultimately a specificity nightmare.

##The Roadmap

Since this is not a normal theme project for PHPBB. I will in essence be completely recreating everything from scratch as well as rethinking the current file structure breakout. I will not be designing or coding with in the confines of PHPBB. I will instead build a static representation of the theme leveraging PHP for dynamic inclusion along the way.

With that being said the following is the current list of tasks that need to be accomplished in no specific order

1. **Viewforum**
    -   add login form
2. Viewtopic
3. Forumlist
4. Login
5. Memberlist
6. Faq
7. Search Results
8. Viewonline
8. UCP/MCP - and individual sections
10. Add in current forum JS functionality
11. Convert code to use PHPBB templating system or TWIG since its available as of 3.1.0a3
12. Work out backend bugs related to new theme and develop patches
13. Work on Admin theme needs to use same framework and codebase as front-end. The only difference should be the components

[1]: http://necolas.github.io/normalize.css/                "Normalize.css"
[2]: http://lesscss.org/                                    "LESS"
[3]: http://smacss.com/                                     "SMACSS"
[4]: https://github.com/hanakin/sugar3                      "Sugar3"
[5]: https://github.com/necolas/idiomatic-css               "Idiomatic"
[6]: http://bradfrostweb.com/blog/post/atomic-web-design/   "Atomic Design"

