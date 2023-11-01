package top.wangruns.trackstacking.controller;

import java.util.List;

import javax.servlet.http.HttpServletRequest;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;

import top.wangruns.trackstacking.model.Song;
import top.wangruns.trackstacking.service.NewTrackOnShelfService;

@Controller
public class NewTrackOnShelfController {
	@Autowired
	private NewTrackOnShelfService newTrackOnShelfService;

	@RequestMapping(value = "newTrackOnShelfFrameLoad.do", method = { RequestMethod.GET })
	public ModelAndView newTrackOnShelfFrameLoad(HttpServletRequest request) {
		ModelAndView modelAndView = new ModelAndView();
		modelAndView.setViewName("newTrackOnShelfFrame");
		List<Song> newTrackSongList = newTrackOnShelfService.getNewTrackWithCollectionFlag(request);

		modelAndView.addObject("newTrackSongList", newTrackSongList);
		modelAndView.addObject("test", "Name");

		return modelAndView;

	}

}
