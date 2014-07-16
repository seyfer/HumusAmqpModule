<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

namespace HumusAmqpModule\Amqp;

use Zend\Stdlib\AbstractOptions;

class QosOptions extends AbstractOptions
{
    /**
     * @var int
     */
    protected $prefetchSize = 0;

    /**
     * @var int
     */
    protected $prefetchCount = 0;

    /**
     * @var bool
     */
    protected $global = false;

    /**
     * @param boolean $global
     */
    public function setGlobal($global)
    {
        $this->global = $global;
    }

    /**
     * @return boolean
     */
    public function getGlobal()
    {
        return $this->global;
    }

    /**
     * @param int $prefetchCount
     */
    public function setPrefetchCount($prefetchCount)
    {
        $this->prefetchCount = $prefetchCount;
    }

    /**
     * @return int
     */
    public function getPrefetchCount()
    {
        return $this->prefetchCount;
    }

    /**
     * @param int $prefetchSize
     */
    public function setPrefetchSize($prefetchSize)
    {
        $this->prefetchSize = $prefetchSize;
    }

    /**
     * @return int
     */
    public function getPrefetchSize()
    {
        return $this->prefetchSize;
    }
}