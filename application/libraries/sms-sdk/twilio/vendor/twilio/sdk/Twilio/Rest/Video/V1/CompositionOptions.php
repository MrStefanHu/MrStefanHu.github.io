<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Video\V1;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
abstract class CompositionOptions {
    /**
     * @param string $status Only show Compositions with the given status.
     * @param \DateTime $dateCreatedAfter Only show Compositions that started on or
     *                                    after this ISO8601 date-time.
     * @param \DateTime $dateCreatedBefore Only show Compositions that started
     *                                     before this this ISO8601 date-time.
     * @param string $roomSid The room_sid
     * @return ReadCompositionOptions Options builder
     */
    public static function read($status = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE, $roomSid = Values::NONE) {
        return new ReadCompositionOptions($status, $dateCreatedAfter, $dateCreatedBefore, $roomSid);
    }

    /**
     * @param string $roomSid The room_sid
     * @param array $videoLayout The video_layout
     * @param string $audioSources The audio_sources
     * @param string $audioSourcesExcluded The audio_sources_excluded
     * @param string $resolution The resolution
     * @param string $format The format
     * @param string $statusCallback The status_callback
     * @param string $statusCallbackMethod The status_callback_method
     * @param boolean $trim The trim
     * @return CreateCompositionOptions Options builder
     */
    public static function create($roomSid = Values::NONE, $videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $resolution = Values::NONE, $format = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $trim = Values::NONE) {
        return new CreateCompositionOptions($roomSid, $videoLayout, $audioSources, $audioSourcesExcluded, $resolution, $format, $statusCallback, $statusCallbackMethod, $trim);
    }
}

class ReadCompositionOptions extends Options {
    /**
     * @param string $status Only show Compositions with the given status.
     * @param \DateTime $dateCreatedAfter Only show Compositions that started on or
     *                                    after this ISO8601 date-time.
     * @param \DateTime $dateCreatedBefore Only show Compositions that started
     *                                     before this this ISO8601 date-time.
     * @param string $roomSid The room_sid
     */
    public function __construct($status = Values::NONE, $dateCreatedAfter = Values::NONE, $dateCreatedBefore = Values::NONE, $roomSid = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        $this->options['roomSid'] = $roomSid;
    }

    /**
     * Only show Compositions with the given status.
     * 
     * @param string $status Only show Compositions with the given status.
     * @return $this Fluent Builder
     */
    public function setStatus($status) {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * Only show Compositions that started on or after this ISO8601 date-time, given as `YYYY-MM-DDThh:mm:ss-hh:mm`.
     * 
     * @param \DateTime $dateCreatedAfter Only show Compositions that started on or
     *                                    after this ISO8601 date-time.
     * @return $this Fluent Builder
     */
    public function setDateCreatedAfter($dateCreatedAfter) {
        $this->options['dateCreatedAfter'] = $dateCreatedAfter;
        return $this;
    }

    /**
     * Only show Compositions that started before this this ISO8601 date-time, given as `YYYY-MM-DDThh:mm:ss-hh:mm`.
     * 
     * @param \DateTime $dateCreatedBefore Only show Compositions that started
     *                                     before this this ISO8601 date-time.
     * @return $this Fluent Builder
     */
    public function setDateCreatedBefore($dateCreatedBefore) {
        $this->options['dateCreatedBefore'] = $dateCreatedBefore;
        return $this;
    }

    /**
     * The room_sid
     * 
     * @param string $roomSid The room_sid
     * @return $this Fluent Builder
     */
    public function setRoomSid($roomSid) {
        $this->options['roomSid'] = $roomSid;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.ReadCompositionOptions ' . implode(' ', $options) . ']';
    }
}

class CreateCompositionOptions extends Options {
    /**
     * @param string $roomSid The room_sid
     * @param array $videoLayout The video_layout
     * @param string $audioSources The audio_sources
     * @param string $audioSourcesExcluded The audio_sources_excluded
     * @param string $resolution The resolution
     * @param string $format The format
     * @param string $statusCallback The status_callback
     * @param string $statusCallbackMethod The status_callback_method
     * @param boolean $trim The trim
     */
    public function __construct($roomSid = Values::NONE, $videoLayout = Values::NONE, $audioSources = Values::NONE, $audioSourcesExcluded = Values::NONE, $resolution = Values::NONE, $format = Values::NONE, $statusCallback = Values::NONE, $statusCallbackMethod = Values::NONE, $trim = Values::NONE) {
        $this->options['roomSid'] = $roomSid;
        $this->options['videoLayout'] = $videoLayout;
        $this->options['audioSources'] = $audioSources;
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        $this->options['resolution'] = $resolution;
        $this->options['format'] = $format;
        $this->options['statusCallback'] = $statusCallback;
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        $this->options['trim'] = $trim;
    }

    /**
     * The room_sid
     * 
     * @param string $roomSid The room_sid
     * @return $this Fluent Builder
     */
    public function setRoomSid($roomSid) {
        $this->options['roomSid'] = $roomSid;
        return $this;
    }

    /**
     * The video_layout
     * 
     * @param array $videoLayout The video_layout
     * @return $this Fluent Builder
     */
    public function setVideoLayout($videoLayout) {
        $this->options['videoLayout'] = $videoLayout;
        return $this;
    }

    /**
     * The audio_sources
     * 
     * @param string $audioSources The audio_sources
     * @return $this Fluent Builder
     */
    public function setAudioSources($audioSources) {
        $this->options['audioSources'] = $audioSources;
        return $this;
    }

    /**
     * The audio_sources_excluded
     * 
     * @param string $audioSourcesExcluded The audio_sources_excluded
     * @return $this Fluent Builder
     */
    public function setAudioSourcesExcluded($audioSourcesExcluded) {
        $this->options['audioSourcesExcluded'] = $audioSourcesExcluded;
        return $this;
    }

    /**
     * The resolution
     * 
     * @param string $resolution The resolution
     * @return $this Fluent Builder
     */
    public function setResolution($resolution) {
        $this->options['resolution'] = $resolution;
        return $this;
    }

    /**
     * The format
     * 
     * @param string $format The format
     * @return $this Fluent Builder
     */
    public function setFormat($format) {
        $this->options['format'] = $format;
        return $this;
    }

    /**
     * The status_callback
     * 
     * @param string $statusCallback The status_callback
     * @return $this Fluent Builder
     */
    public function setStatusCallback($statusCallback) {
        $this->options['statusCallback'] = $statusCallback;
        return $this;
    }

    /**
     * The status_callback_method
     * 
     * @param string $statusCallbackMethod The status_callback_method
     * @return $this Fluent Builder
     */
    public function setStatusCallbackMethod($statusCallbackMethod) {
        $this->options['statusCallbackMethod'] = $statusCallbackMethod;
        return $this;
    }

    /**
     * The trim
     * 
     * @param boolean $trim The trim
     * @return $this Fluent Builder
     */
    public function setTrim($trim) {
        $this->options['trim'] = $trim;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Video.V1.CreateCompositionOptions ' . implode(' ', $options) . ']';
    }
}