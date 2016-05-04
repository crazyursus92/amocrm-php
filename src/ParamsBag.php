<?php

    namespace AmoCRM;

    class ParamsBag
    {
        private $authParams = [];
        private $getParams  = [];
        private $postParams = [];

        public function addAuth($name, $value)
        {
            $this->authParams[$name] = $value;
        }

        public function getAuth($key = null)
        {
            if ($key !== null) {
                return isset($this->authParams[$key]) ? $this->authParams[$key] : null;
            }

            return $this->authParams;
        }

        public function addGet($name, $value = null)
        {
            if (is_array($name) AND $value === null) {
                $this->getParams = array_merge($this->getParams, $name);
            } else {
                $this->getParams[$name] = $value;
            }

            return $this;
        }

        public function getGet($key = null)
        {
            if ($key !== null) {
                return isset($this->getParams[$key]) ? $this->getParams[$key] : null;
            }

            return $this->getParams;
        }

        public function addPost($name, $value)
        {
            $this->postParams[$name] = $value;
        }

        public function getPost($key = null)
        {
            if ($key !== null) {
                return isset($this->postParams[$key]) ? $this->postParams[$key] : null;
            }

            return $this->postParams;
        }

        public function hasPost()
        {
            return count($this->postParams);
        }
    }