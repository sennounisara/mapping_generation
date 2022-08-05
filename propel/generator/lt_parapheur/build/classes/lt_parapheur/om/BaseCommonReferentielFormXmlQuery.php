<?php


/**
 * Base class that represents a query for the 'ReferentielFormXml' table.
 *
 * 
 *
 * @method CommonReferentielFormXmlQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielFormXmlQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonReferentielFormXmlQuery orderByIdTypeXml($order = Criteria::ASC) Order by the id_type_xml column
 * @method CommonReferentielFormXmlQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonReferentielFormXmlQuery orderByXml($order = Criteria::ASC) Order by the xml column
 * @method CommonReferentielFormXmlQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonReferentielFormXmlQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonReferentielFormXmlQuery orderByIdCompteBoamp($order = Criteria::ASC) Order by the id_compte_boamp column
 *
 * @method CommonReferentielFormXmlQuery groupById() Group by the id column
 * @method CommonReferentielFormXmlQuery groupByOrganisme() Group by the organisme column
 * @method CommonReferentielFormXmlQuery groupByIdTypeXml() Group by the id_type_xml column
 * @method CommonReferentielFormXmlQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonReferentielFormXmlQuery groupByXml() Group by the xml column
 * @method CommonReferentielFormXmlQuery groupByDateCreation() Group by the date_creation column
 * @method CommonReferentielFormXmlQuery groupByStatut() Group by the statut column
 * @method CommonReferentielFormXmlQuery groupByIdCompteBoamp() Group by the id_compte_boamp column
 *
 * @method CommonReferentielFormXmlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielFormXmlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielFormXmlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielFormXml findOne(PropelPDO $con = null) Return the first CommonReferentielFormXml matching the query
 * @method CommonReferentielFormXml findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielFormXml matching the query, or a new CommonReferentielFormXml object populated from the query conditions when no match is found
 *
 * @method CommonReferentielFormXml findOneById(int $id) Return the first CommonReferentielFormXml filtered by the id column
 * @method CommonReferentielFormXml findOneByOrganisme(string $organisme) Return the first CommonReferentielFormXml filtered by the organisme column
 * @method CommonReferentielFormXml findOneByIdTypeXml(int $id_type_xml) Return the first CommonReferentielFormXml filtered by the id_type_xml column
 * @method CommonReferentielFormXml findOneByConsultationRef(string $consultation_ref) Return the first CommonReferentielFormXml filtered by the consultation_ref column
 * @method CommonReferentielFormXml findOneByXml(string $xml) Return the first CommonReferentielFormXml filtered by the xml column
 * @method CommonReferentielFormXml findOneByDateCreation(string $date_creation) Return the first CommonReferentielFormXml filtered by the date_creation column
 * @method CommonReferentielFormXml findOneByStatut(string $statut) Return the first CommonReferentielFormXml filtered by the statut column
 * @method CommonReferentielFormXml findOneByIdCompteBoamp(int $id_compte_boamp) Return the first CommonReferentielFormXml filtered by the id_compte_boamp column
 *
 * @method array findById(int $id) Return CommonReferentielFormXml objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielFormXml objects filtered by the organisme column
 * @method array findByIdTypeXml(int $id_type_xml) Return CommonReferentielFormXml objects filtered by the id_type_xml column
 * @method array findByConsultationRef(string $consultation_ref) Return CommonReferentielFormXml objects filtered by the consultation_ref column
 * @method array findByXml(string $xml) Return CommonReferentielFormXml objects filtered by the xml column
 * @method array findByDateCreation(string $date_creation) Return CommonReferentielFormXml objects filtered by the date_creation column
 * @method array findByStatut(string $statut) Return CommonReferentielFormXml objects filtered by the statut column
 * @method array findByIdCompteBoamp(int $id_compte_boamp) Return CommonReferentielFormXml objects filtered by the id_compte_boamp column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonReferentielFormXmlQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielFormXmlQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielFormXml', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielFormXmlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielFormXmlQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielFormXmlQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielFormXmlQuery) {
            return $criteria;
        }
        $query = new CommonReferentielFormXmlQuery();
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
     * @return   CommonReferentielFormXml|CommonReferentielFormXml[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielFormXmlPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielFormXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielFormXml A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_type_xml`, `consultation_ref`, `xml`, `date_creation`, `statut`, `id_compte_boamp` FROM `ReferentielFormXml` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonReferentielFormXml();
            $obj->hydrate($row);
            CommonReferentielFormXmlPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonReferentielFormXml|CommonReferentielFormXml[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielFormXml[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonReferentielFormXmlPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonReferentielFormXmlPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonReferentielFormXmlPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonReferentielFormXmlPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielFormXmlPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielFormXmlPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::ID, $id, $comparison);
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
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_type_xml column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeXml(1234); // WHERE id_type_xml = 1234
     * $query->filterByIdTypeXml(array(12, 34)); // WHERE id_type_xml IN (12, 34)
     * $query->filterByIdTypeXml(array('min' => 12)); // WHERE id_type_xml >= 12
     * $query->filterByIdTypeXml(array('max' => 12)); // WHERE id_type_xml <= 12
     * </code>
     *
     * @param     mixed $idTypeXml The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByIdTypeXml($idTypeXml = null, $comparison = null)
    {
        if (is_array($idTypeXml)) {
            $useMinMax = false;
            if (isset($idTypeXml['min'])) {
                $this->addUsingAlias(CommonReferentielFormXmlPeer::ID_TYPE_XML, $idTypeXml['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeXml['max'])) {
                $this->addUsingAlias(CommonReferentielFormXmlPeer::ID_TYPE_XML, $idTypeXml['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::ID_TYPE_XML, $idTypeXml, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef('fooValue');   // WHERE consultation_ref = 'fooValue'
     * $query->filterByConsultationRef('%fooValue%'); // WHERE consultation_ref LIKE '%fooValue%'
     * </code>
     *
     * @param     string $consultationRef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($consultationRef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $consultationRef)) {
                $consultationRef = str_replace('*', '%', $consultationRef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::XML, $xml, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the id_compte_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompteBoamp(1234); // WHERE id_compte_boamp = 1234
     * $query->filterByIdCompteBoamp(array(12, 34)); // WHERE id_compte_boamp IN (12, 34)
     * $query->filterByIdCompteBoamp(array('min' => 12)); // WHERE id_compte_boamp >= 12
     * $query->filterByIdCompteBoamp(array('max' => 12)); // WHERE id_compte_boamp <= 12
     * </code>
     *
     * @param     mixed $idCompteBoamp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function filterByIdCompteBoamp($idCompteBoamp = null, $comparison = null)
    {
        if (is_array($idCompteBoamp)) {
            $useMinMax = false;
            if (isset($idCompteBoamp['min'])) {
                $this->addUsingAlias(CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP, $idCompteBoamp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompteBoamp['max'])) {
                $this->addUsingAlias(CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP, $idCompteBoamp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielFormXmlPeer::ID_COMPTE_BOAMP, $idCompteBoamp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielFormXml $commonReferentielFormXml Object to remove from the list of results
     *
     * @return CommonReferentielFormXmlQuery The current query, for fluid interface
     */
    public function prune($commonReferentielFormXml = null)
    {
        if ($commonReferentielFormXml) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonReferentielFormXmlPeer::ID), $commonReferentielFormXml->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonReferentielFormXmlPeer::ORGANISME), $commonReferentielFormXml->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
