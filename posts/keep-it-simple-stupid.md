# Keep it Simple Stupid! <small>Use-case results...</small>
- Michael Miday
- midaym
- 2014-03-23
- Projects
- purple
- published

Among alot of findings the largest seems to be the over complexity of the framework and the recoding and mirroring of the Boostrap modules. Find out all the problems and the new way forward from here...

###The Task at Hand

I set out to apply the current state of the framework from my last post as a usecase study for a more complex project then the theme of this site. To do this I took applied it to project "mino" the new theme I am working on for PHPBB. It has been two months since then and I have noted alot of problems with the current framework and have begun to fix the framework.

###The problems with the framework

1. The largest problem was the complexity of it in that when I originally set out to layout its structure I over complicated it. Leading to a slow prototyping stage and ultimately to long to tackle just one page of many for this project.

2. The second thing of note was the recreation and mirroring of the Bootstrap Modules. This proved to be extremely complicated to handle and in the end it seems its easier just to include Bootstrap as a dependency and code over anything that needs to be. Thus changing the scope of the project from a full framework to more of a theme on top of Bootstrap akin to Flat-UI but with a more thought out and organized structural approach.

3. The inclusion of more then one icon set seems to be both useful and a pain as yes I have enough of a selection for icons for a project that will rely heavily on them. The downside being that it code for this was to heavy and hard to maintain for modifications. The other upside is that if I limit the theme to just font-awesome icons I can include it as another dependency and cache it.

4. The spacing and font sizes also became to complex and in the end the simple implementation that Bootstrap has seems to be a better option. Yet Flat-UI has improved upon this with better numbers that we will most likely use as our defaults as well

###In Summary

The framework will be reworked to be dependent on Bootstrap as a base, as well as font-awesome. It will also be somewhat based off of Flat-UI at the beginning at least for the spacing, colors and size. Until the final release that is.

