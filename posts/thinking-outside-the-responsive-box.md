# Thinking Outside the Responsive Box <small>Responsibly Disscussing</small>
- Michael Miday
- midaym
- 2013-05-22
- Web
- blue
- published

We here individuals throughing around so much termanology these days that we tend to get overwelmed. None more aparant than that of Responsive Design. There are so many choices and different approaches to accomplish this no one stops to try and think about what they are acctually trying to accomplish in the first place. Add to all of that the ability for it to be flexable and span multiple project types from static web page to largescale applications & back-end interfaces. So where should we start and what exactly is it that we are trying to accomplish.

##An Objective Approach
Lets look at this thing objectively and acctually apply some OOAD principles to the actual concept as a whole rather than two unique processes. By doing this we establish that at its simpliest form we are trying to serve a consistant look, feel, & presence to the customers on three or more unique devices. Think of each of these devices as objects that have certain needs that we as designers and coders need to fullfill. This is the first simple task that should be handled in your responsive workflow.

Take my recent project for example. I am designing a theme for a popular open source web application. This makes the idea of responsive design rather problematic as their are alot of individual elemnts through out the theme that would need to be handled for each unique device. However by defining what the requirments are for each device upfront I can think about these when designing the elements that make up my theme.

####Establish the Devices
-	Desktop
-	Tablet
-	Mobile Phone

Now that I know what devices I need to think of I can determine how to handle each one and what their breaking points should be. 

####Breakout the Views
-	Desktop
	*	Widecreen
	*	Normal
-	Tablet
	*	Portrait
	*	Landscape
-	Mobile Phone
	*	Portrait
	*	Landscape

Thats acctually alot of views lets see what we can do to simplify the ammount of views. First I can probably assume that the Landscape view for the Tablet is going to be close to the same as that of the desktop. Next we can simplify that of the mobile device in a number of different approaches weather it be by stacking or scaling. So lets see what that leaves us with.

-	Desktop
	*	Widecreen
	*	Normal
-	Tablet
-	Mobile Phone

Ok so thats alot easier to work with. 

####Mobile vs Desktop First?
Ok we need to choose what view will be are base or starting point. Their is alot of debate about this one as to weather it should be a scale up or scale down approach. In esence do we start with the largest and work down or the smallest and work up. Personally I feel that the better of the two would be smallest up if we are trying to think responsively, but why is that. 

Well when you start small you can limit what you put into the design of the mobile layout. As it forces you to make these descisions in the intial stage rather than waiting until after the fact and having to go back and figure out which elements need to be scaled or removed. 

The flip side of this is that its easier to set spacing and determine your grid flow if you start in the large view and work your way down. It also allows you to mock up what elements are needed throught the theme/design in the inital stage to determine the structure of the code and the inherent problems with the coding of the design.

Both of these approaches have merit, however if they both haave ups & downs than why do we not try a more middle ground approach. By planning for the taablet size view first we are constraining our thinking to determine what elements are needed in all views as well as a large enough layout to establish the grids and spacing. This is acctually very helpful and very efficient at providing us with a Mockup that we can go straight to code with without the need to redesign for each view. essentially you will still be serving a mobile first theme. The only difference is that your mock-up will be at the tablet size, and contain elemtnts that fit both tablet & mobile only.

####Tablet First to bridge the Small vs. Large Scale Projects
How exactly does this limit the amount of design work you may be asking. Well its quite simple by breaking your projet down into the individual elements required to make up a theme regaurdless of the scope of the project. We intern do not care about the structure of a web page. we only care about the structure of the individual elemetns and establishing how they fit to the grid system we choose. The combination of these two things will determine the structure for you. This inturn will limit the ammount of design work; once you really start to get good at it that is. You will see that by establishing a cleary consistant spacing pattern via a vertical & horizontal grid and strictly adhereing to it, will allow us to focus on the design of the elements rather than the structure and spacing. 

Since we are not focusing on structure then we do not need to think of the design as a series of pages with unique layouts and elemetns. We essentially only need one page of elemetns to be used through out the design. This essentially allows us to only create whats called a StyleGuide. While its a little bit larger scale then most StyleGuides its alot simpler than a multi-page design.

So what does this mean for the pitch to the client? Well by pitching just the style guide for re-design projects you can use the Clients current site as part of the pitch showing them how each piece of the Pie has been uniquely crafted. For those newly devloped projects you can probably go ahead and code the static pages for these as the CSS structure is handled as you have modularized the theme into elements which inturn allow you to ensure similarities across the design which should make the CSS alot more Object oriented. The hardest part should then be what is usually the easiest part for most projects; the Semantic HTML markup.

####Defining the Elements
The true advantage to working in this way is that it allows you to define what is truely useful for the user on each device and what just gets in the way. It also allows you to maintain a sense of similarity and consistancy throughout your design even for large scale projects in a simple manner. It does this by forcing you to focus on the presnetation and interaction while avoiding the hangups that come with the placement, spacig of elements on the page/layout. Ultimately getting back to truely designing without making it difficult to consider what you are designing for.

##The Grids
The second aspect that we find when truely analyising what we need comes to us in the spacing and control of our elements on the page. The approach that we most commonly come to is the use of a grid. This is the correct tool; however, it is not being correctly utilized. Their are several options out their for grid systems. Both fixed and fluid options exists. This has been the largest debate on the subject. Again it is not the correct focus. To put it frank I do not care weather the content is based on a fixed number or a percentage. For one the screen size on all devices other than that of the dektop are fixed so why do I need something that is fluid for those if I plan for it in my spacing. For that matter why do I need to conform to the random size of the user on a desktop. If I plan for an average size used for both small and large screens this should be all I need. Do not get me wrong, some of the recent insights into scalling content are useful for instance the ability to scale and image and video are nessecary.

Until now it has been very difficult to handle the spacing of elemtns on the screen with CSS. With the invention of the preprocessor languages; however, this is rather simple. You can define your spacing units as variables and use them to construct any kind of grid system you wish. Thus allowing us to create a true grid in both the horizontal and vertiacl spaces rather than just horizontal.

Back to the example project. I took the standard 10px unit of measure for my grid. I then found its prime of 5px giving access to the smallest unit possible through my design. I then considered the typography for the contruction of the vertical spacing. The mot common size typography are all mulyiples of 3. This gives me a vertical to horizontal ratio of 3/5px. Using this as my variables to establish all of my spacing throught my theme, I am able to produce a very clean well structured grid system. Moreove since it will be the smallest unit possible that I am using as my base varabiles. I can easily multiply these to increase the spacing for the larger devices. This provides me with endless flexability in the control of the content on screen all based on a strict unit of spacing. Thus allowing me to conform to any of the popular ratios in the design community simply by altering these two variables. Add in the fact that we pad the outside of our desings for our mobile devices with some bleed and we essentially have a truely dynamic print like environment for the web, that easily adheres to the responsiveness of multiple devices.


