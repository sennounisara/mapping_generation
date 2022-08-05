<?php


/**
 * Base class that represents a query for the 'FormXmlDestinataireOpoce' table.
 *
 * 
 *
 * @method CommonFormXmlDestinataireOpoceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonFormXmlDestinataireOpoceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonFormXmlDestinataireOpoceQuery orderByIdDestinataireOpoce($order = Criteria::ASC) Order by the id_destinataire_opoce column
 * @method CommonFormXmlDestinataireOpoceQuery orderByXml($order = Criteria::ASC) Order by the xml column
 * @method CommonFormXmlDestinataireOpoceQuery orderByCodeRetour($order = Criteria::ASC) Order by the code_retour column
 * @method CommonFormXmlDestinataireOpoceQuery orderByMessageRetour($order = Criteria::ASC) Order by the message_retour column
 * @method CommonFormXmlDestinataireOpoceQuery orderByIdJoue($order = Criteria::ASC) Order by the id_joue column
 * @method CommonFormXmlDestinataireOpoceQuery orderByDatePubJoue($order = Criteria::ASC) Order by the date_pub_joue column
 * @method CommonFormXmlDestinataireOpoceQuery orderByLienPublication($order = Criteria::ASC) Order by the lien_publication column
 * @method CommonFormXmlDestinataireOpoceQuery orderByNoDocExt($order = Criteria::ASC) Order by the no_doc_ext column
 *
 * @method CommonFormXmlDestinataireOpoceQuery groupById() Group by the id column
 * @method CommonFormXmlDestinataireOpoceQuery groupByOrganisme() Group by the organisme column
 * @method CommonFormXmlDestinataireOpoceQuery groupByIdDestinataireOpoce() Group by the id_destinataire_opoce column
 * @method CommonFormXmlDestinataireOpoceQuery groupByXml() Group by the xml column
 * @method CommonFormXmlDestinataireOpoceQuery groupByCodeRetour() Group by the code_retour column
 * @method CommonFormXmlDestinataireOpoceQuery groupByMessageRetour() Group by the message_retour column
 * @method CommonFormXmlDestinataireOpoceQuery groupByIdJoue() Group by the id_joue column
 * @method CommonFormXmlDestinataireOpoceQuery groupByDatePubJoue() Group by the date_pub_joue column
 * @method CommonFormXmlDestinataireOpoceQuery groupByLienPublication() Group by the lien_publication column
 * @method CommonFormXmlDestinataireOpoceQuery groupByNoDocExt() Group by the no_doc_ext column
 *
 * @method CommonFormXmlDestinataireOpoceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFormXmlDestinataireOpoceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFormXmlDestinataireOpoceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFormXmlDestinataireOpoce findOne(PropelPDO $con = null) Return the first CommonFormXmlDestinataireOpoce matching the query
 * @method CommonFormXmlDestinataireOpoce findOneOrCreate(PropelPDO $con = null) Return the first CommonFormXmlDestinataireOpoce matching the query, or a new CommonFormXmlDestinataireOpoce object populated from the query conditions when no match is found
 *
 * @method CommonFormXmlDestinataireOpoce findOneById(int $id) Return the first CommonFormXmlDestinataireOpoce filtered by the id column
 * @method CommonFormXmlDestinataireOpoce findOneByOrganisme(string $organisme) Return the first CommonFormXmlDestinataireOpoce filtered by the organisme column
 * @method CommonFormXmlDestinataireOpoce findOneByIdDestinataireOpoce(int $id_destinataire_opoce) Return the first CommonFormXmlDestinataireOpoce filtered by the id_destinataire_opoce column
 * @method CommonFormXmlDestinataireOpoce findOneByXml(string $xml) Return the first CommonFormXmlDestinataireOpoce filtered by the xml column
 * @method CommonFormXmlDestinataireOpoce findOneByCodeRetour(string $code_retour) Return the first CommonFormXmlDestinataireOpoce filtered by the code_retour column
 * @method CommonFormXmlDestinataireOpoce findOneByMessageRetour(string $message_retour) Return the first CommonFormXmlDestinataireOpoce filtered by the message_retour column
 * @method CommonFormXmlDestinataireOpoce findOneByIdJoue(string $id_joue) Return the first CommonFormXmlDestinataireOpoce filtered by the id_joue column
 * @method CommonFormXmlDestinataireOpoce findOneByDatePubJoue(string $date_pub_joue) Return the first CommonFormXmlDestinataireOpoce filtered by the date_pub_joue column
 * @method CommonFormXmlDestinataireOpoce findOneByLienPublication(string $lien_publication) Return the first CommonFormXmlDestinataireOpoce filtered by the lien_publication column
 * @method CommonFormXmlDestinataireOpoce findOneByNoDocExt(string $no_doc_ext) Return the first CommonFormXmlDestinataireOpoce filtered by the no_doc_ext column
 *
 * @method array findById(int $id) Return CommonFormXmlDestinataireOpoce objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonFormXmlDestinataireOpoce objects filtered by the organisme column
 * @method array findByIdDestinataireOpoce(int $id_destinataire_opoce) Return CommonFormXmlDestinataireOpoce objects filtered by the id_destinataire_opoce column
 * @method array findByXml(string $xml) Return CommonFormXmlDestinataireOpoce objects filtered by the xml column
 * @method array findByCodeRetour(string $code_retour) Return CommonFormXmlDestinataireOpoce objects filtered by the code_retour column
 * @method array findByMessageRetour(string $message_retour) Return CommonFormXmlDestinataireOpoce objects filtered by the message_retour column
 * @method array findByIdJoue(string $id_joue) Return CommonFormXmlDestinataireOpoce objects filtered by the id_joue column
 * @method array findByDatePubJoue(string $date_pub_joue) Return CommonFormXmlDestinataireOpoce objects filtered by the date_pub_joue column
 * @method array findByLienPublication(string $lien_publication) Return CommonFormXmlDestinataireOpoce objects filtered by the lien_publication column
 * @method array findByNoDocExt(string $no_doc_ext) Return CommonFormXmlDestinataireOpoce objects filtered by the no_doc_ext column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonFormXmlDestinataireOpoceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFormXmlDestinataireOpoceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFormXmlDestinataireOpoce', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFormXmlDestinataireOpoceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFormXmlDestinataireOpoceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFormXmlDestinataireOpoceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFormXmlDestinataireOpoceQuery) {
            return $criteria;
        }
        $query = new CommonFormXmlDestinataireOpoceQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonFormXmlDestinataireOpoce|CommonFormXmlDestinataireOpoce[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFormXmlDestinataireOpocePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFormXmlDestinataireOpocePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonFormXmlDestinataireOpoce A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_destinataire_opoce`, `xml`, `code_retour`, `message_retour`, `id_joue`, `date_pub_joue`, `lien_publication`, `no_doc_ext` FROM `FormXmlDestinataireOpoce` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonFormXmlDestinataireOpoce();
            $obj->hydrate($row);
            CommonFormXmlDestinataireOpocePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonFormXmlDestinataireOpoce|CommonFormXmlDestinataireOpoce[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonFormXmlDestinataireOpoce[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonFormXmlDestinataireOpocePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonFormXmlDestinataireOpocePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_destinataire_opoce column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestinataireOpoce(1234); // WHERE id_destinataire_opoce = 1234
     * $query->filterByIdDestinataireOpoce(array(12, 34)); // WHERE id_destinataire_opoce IN (12, 34)
     * $query->filterByIdDestinataireOpoce(array('min' => 12)); // WHERE id_destinataire_opoce >= 12
     * $query->filterByIdDestinataireOpoce(array('max' => 12)); // WHERE id_destinataire_opoce <= 12
     * </code>
     *
     * @param     mixed $idDestinataireOpoce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByIdDestinataireOpoce($idDestinataireOpoce = null, $comparison = null)
    {
        if (is_array($idDestinataireOpoce)) {
            $useMinMax = false;
            if (isset($idDestinataireOpoce['min'])) {
                $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE, $idDestinataireOpoce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestinataireOpoce['max'])) {
                $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE, $idDestinataireOpoce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID_DESTINATAIRE_OPOCE, $idDestinataireOpoce, $comparison);
    }

    /**
     * Filter the query on the xml column
     *
     * Example usage:
     * <code>
     * $query->filterByXml('fooValue');   // WHERE xml = 'fooValue'
     * $query->filterByXml('%fooValue%'); // WHERE xml LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xml The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByXml($xml = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xml)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xml)) {
                $xml = str_replace('*', '%', $xml);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::XML, $xml, $comparison);
    }

    /**
     * Filter the query on the code_retour column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeRetour('fooValue');   // WHERE code_retour = 'fooValue'
     * $query->filterByCodeRetour('%fooValue%'); // WHERE code_retour LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeRetour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByCodeRetour($codeRetour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeRetour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeRetour)) {
                $codeRetour = str_replace('*', '%', $codeRetour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::CODE_RETOUR, $codeRetour, $comparison);
    }

    /**
     * Filter the query on the message_retour column
     *
     * Example usage:
     * <code>
     * $query->filterByMessageRetour('fooValue');   // WHERE message_retour = 'fooValue'
     * $query->filterByMessageRetour('%fooValue%'); // WHERE message_retour LIKE '%fooValue%'
     * </code>
     *
     * @param     string $messageRetour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByMessageRetour($messageRetour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($messageRetour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $messageRetour)) {
                $messageRetour = str_replace('*', '%', $messageRetour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::MESSAGE_RETOUR, $messageRetour, $comparison);
    }

    /**
     * Filter the query on the id_joue column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJoue('fooValue');   // WHERE id_joue = 'fooValue'
     * $query->filterByIdJoue('%fooValue%'); // WHERE id_joue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idJoue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByIdJoue($idJoue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idJoue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idJoue)) {
                $idJoue = str_replace('*', '%', $idJoue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::ID_JOUE, $idJoue, $comparison);
    }

    /**
     * Filter the query on the date_pub_joue column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePubJoue('fooValue');   // WHERE date_pub_joue = 'fooValue'
     * $query->filterByDatePubJoue('%fooValue%'); // WHERE date_pub_joue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datePubJoue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByDatePubJoue($datePubJoue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datePubJoue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datePubJoue)) {
                $datePubJoue = str_replace('*', '%', $datePubJoue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::DATE_PUB_JOUE, $datePubJoue, $comparison);
    }

    /**
     * Filter the query on the lien_publication column
     *
     * Example usage:
     * <code>
     * $query->filterByLienPublication('fooValue');   // WHERE lien_publication = 'fooValue'
     * $query->filterByLienPublication('%fooValue%'); // WHERE lien_publication LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lienPublication The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByLienPublication($lienPublication = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lienPublication)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lienPublication)) {
                $lienPublication = str_replace('*', '%', $lienPublication);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::LIEN_PUBLICATION, $lienPublication, $comparison);
    }

    /**
     * Filter the query on the no_doc_ext column
     *
     * Example usage:
     * <code>
     * $query->filterByNoDocExt('fooValue');   // WHERE no_doc_ext = 'fooValue'
     * $query->filterByNoDocExt('%fooValue%'); // WHERE no_doc_ext LIKE '%fooValue%'
     * </code>
     *
     * @param     string $noDocExt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function filterByNoDocExt($noDocExt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($noDocExt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $noDocExt)) {
                $noDocExt = str_replace('*', '%', $noDocExt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormXmlDestinataireOpocePeer::NO_DOC_EXT, $noDocExt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFormXmlDestinataireOpoce $commonFormXmlDestinataireOpoce Object to remove from the list of results
     *
     * @return CommonFormXmlDestinataireOpoceQuery The current query, for fluid interface
     */
    public function prune($commonFormXmlDestinataireOpoce = null)
    {
        if ($commonFormXmlDestinataireOpoce) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonFormXmlDestinataireOpocePeer::ID), $commonFormXmlDestinataireOpoce->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonFormXmlDestinataireOpocePeer::ORGANISME), $commonFormXmlDestinataireOpoce->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
