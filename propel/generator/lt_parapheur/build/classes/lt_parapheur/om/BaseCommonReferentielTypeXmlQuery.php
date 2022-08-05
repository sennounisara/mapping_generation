<?php


/**
 * Base class that represents a query for the 'ReferentielTypeXml' table.
 *
 * 
 *
 * @method CommonReferentielTypeXmlQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielTypeXmlQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonReferentielTypeXmlQuery orderByIdDestinataire($order = Criteria::ASC) Order by the id_destinataire column
 * @method CommonReferentielTypeXmlQuery orderByLibelleType($order = Criteria::ASC) Order by the libelle_type column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeFr($order = Criteria::ASC) Order by the libelle_type_fr column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeEn($order = Criteria::ASC) Order by the libelle_type_en column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeEs($order = Criteria::ASC) Order by the libelle_type_es column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeSu($order = Criteria::ASC) Order by the libelle_type_su column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeDu($order = Criteria::ASC) Order by the libelle_type_du column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeCz($order = Criteria::ASC) Order by the libelle_type_cz column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeAr($order = Criteria::ASC) Order by the libelle_type_ar column
 * @method CommonReferentielTypeXmlQuery orderByLibelleTypeIt($order = Criteria::ASC) Order by the libelle_type_it column
 * @method CommonReferentielTypeXmlQuery orderByIdAvisMarche($order = Criteria::ASC) Order by the id_avis_marche column
 *
 * @method CommonReferentielTypeXmlQuery groupById() Group by the id column
 * @method CommonReferentielTypeXmlQuery groupByOrganisme() Group by the organisme column
 * @method CommonReferentielTypeXmlQuery groupByIdDestinataire() Group by the id_destinataire column
 * @method CommonReferentielTypeXmlQuery groupByLibelleType() Group by the libelle_type column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeFr() Group by the libelle_type_fr column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeEn() Group by the libelle_type_en column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeEs() Group by the libelle_type_es column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeSu() Group by the libelle_type_su column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeDu() Group by the libelle_type_du column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeCz() Group by the libelle_type_cz column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeAr() Group by the libelle_type_ar column
 * @method CommonReferentielTypeXmlQuery groupByLibelleTypeIt() Group by the libelle_type_it column
 * @method CommonReferentielTypeXmlQuery groupByIdAvisMarche() Group by the id_avis_marche column
 *
 * @method CommonReferentielTypeXmlQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielTypeXmlQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielTypeXmlQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielTypeXml findOne(PropelPDO $con = null) Return the first CommonReferentielTypeXml matching the query
 * @method CommonReferentielTypeXml findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielTypeXml matching the query, or a new CommonReferentielTypeXml object populated from the query conditions when no match is found
 *
 * @method CommonReferentielTypeXml findOneById(int $id) Return the first CommonReferentielTypeXml filtered by the id column
 * @method CommonReferentielTypeXml findOneByOrganisme(string $organisme) Return the first CommonReferentielTypeXml filtered by the organisme column
 * @method CommonReferentielTypeXml findOneByIdDestinataire(string $id_destinataire) Return the first CommonReferentielTypeXml filtered by the id_destinataire column
 * @method CommonReferentielTypeXml findOneByLibelleType(string $libelle_type) Return the first CommonReferentielTypeXml filtered by the libelle_type column
 * @method CommonReferentielTypeXml findOneByLibelleTypeFr(string $libelle_type_fr) Return the first CommonReferentielTypeXml filtered by the libelle_type_fr column
 * @method CommonReferentielTypeXml findOneByLibelleTypeEn(string $libelle_type_en) Return the first CommonReferentielTypeXml filtered by the libelle_type_en column
 * @method CommonReferentielTypeXml findOneByLibelleTypeEs(string $libelle_type_es) Return the first CommonReferentielTypeXml filtered by the libelle_type_es column
 * @method CommonReferentielTypeXml findOneByLibelleTypeSu(string $libelle_type_su) Return the first CommonReferentielTypeXml filtered by the libelle_type_su column
 * @method CommonReferentielTypeXml findOneByLibelleTypeDu(string $libelle_type_du) Return the first CommonReferentielTypeXml filtered by the libelle_type_du column
 * @method CommonReferentielTypeXml findOneByLibelleTypeCz(string $libelle_type_cz) Return the first CommonReferentielTypeXml filtered by the libelle_type_cz column
 * @method CommonReferentielTypeXml findOneByLibelleTypeAr(string $libelle_type_ar) Return the first CommonReferentielTypeXml filtered by the libelle_type_ar column
 * @method CommonReferentielTypeXml findOneByLibelleTypeIt(string $libelle_type_it) Return the first CommonReferentielTypeXml filtered by the libelle_type_it column
 * @method CommonReferentielTypeXml findOneByIdAvisMarche(int $id_avis_marche) Return the first CommonReferentielTypeXml filtered by the id_avis_marche column
 *
 * @method array findById(int $id) Return CommonReferentielTypeXml objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielTypeXml objects filtered by the organisme column
 * @method array findByIdDestinataire(string $id_destinataire) Return CommonReferentielTypeXml objects filtered by the id_destinataire column
 * @method array findByLibelleType(string $libelle_type) Return CommonReferentielTypeXml objects filtered by the libelle_type column
 * @method array findByLibelleTypeFr(string $libelle_type_fr) Return CommonReferentielTypeXml objects filtered by the libelle_type_fr column
 * @method array findByLibelleTypeEn(string $libelle_type_en) Return CommonReferentielTypeXml objects filtered by the libelle_type_en column
 * @method array findByLibelleTypeEs(string $libelle_type_es) Return CommonReferentielTypeXml objects filtered by the libelle_type_es column
 * @method array findByLibelleTypeSu(string $libelle_type_su) Return CommonReferentielTypeXml objects filtered by the libelle_type_su column
 * @method array findByLibelleTypeDu(string $libelle_type_du) Return CommonReferentielTypeXml objects filtered by the libelle_type_du column
 * @method array findByLibelleTypeCz(string $libelle_type_cz) Return CommonReferentielTypeXml objects filtered by the libelle_type_cz column
 * @method array findByLibelleTypeAr(string $libelle_type_ar) Return CommonReferentielTypeXml objects filtered by the libelle_type_ar column
 * @method array findByLibelleTypeIt(string $libelle_type_it) Return CommonReferentielTypeXml objects filtered by the libelle_type_it column
 * @method array findByIdAvisMarche(int $id_avis_marche) Return CommonReferentielTypeXml objects filtered by the id_avis_marche column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonReferentielTypeXmlQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielTypeXmlQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielTypeXml', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielTypeXmlQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielTypeXmlQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielTypeXmlQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielTypeXmlQuery) {
            return $criteria;
        }
        $query = new CommonReferentielTypeXmlQuery();
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
     * @return   CommonReferentielTypeXml|CommonReferentielTypeXml[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielTypeXmlPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielTypeXmlPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielTypeXml A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_destinataire`, `libelle_type`, `libelle_type_fr`, `libelle_type_en`, `libelle_type_es`, `libelle_type_su`, `libelle_type_du`, `libelle_type_cz`, `libelle_type_ar`, `libelle_type_it`, `id_avis_marche` FROM `ReferentielTypeXml` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonReferentielTypeXml();
            $obj->hydrate($row);
            CommonReferentielTypeXmlPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonReferentielTypeXml|CommonReferentielTypeXml[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielTypeXml[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonReferentielTypeXmlPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonReferentielTypeXmlPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonReferentielTypeXmlPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID, $id, $comparison);
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
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestinataire('fooValue');   // WHERE id_destinataire = 'fooValue'
     * $query->filterByIdDestinataire('%fooValue%'); // WHERE id_destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idDestinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByIdDestinataire($idDestinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idDestinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idDestinataire)) {
                $idDestinataire = str_replace('*', '%', $idDestinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID_DESTINATAIRE, $idDestinataire, $comparison);
    }

    /**
     * Filter the query on the libelle_type column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleType('fooValue');   // WHERE libelle_type = 'fooValue'
     * $query->filterByLibelleType('%fooValue%'); // WHERE libelle_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleType($libelleType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleType)) {
                $libelleType = str_replace('*', '%', $libelleType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE, $libelleType, $comparison);
    }

    /**
     * Filter the query on the libelle_type_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeFr('fooValue');   // WHERE libelle_type_fr = 'fooValue'
     * $query->filterByLibelleTypeFr('%fooValue%'); // WHERE libelle_type_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeFr($libelleTypeFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeFr)) {
                $libelleTypeFr = str_replace('*', '%', $libelleTypeFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_FR, $libelleTypeFr, $comparison);
    }

    /**
     * Filter the query on the libelle_type_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeEn('fooValue');   // WHERE libelle_type_en = 'fooValue'
     * $query->filterByLibelleTypeEn('%fooValue%'); // WHERE libelle_type_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeEn($libelleTypeEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeEn)) {
                $libelleTypeEn = str_replace('*', '%', $libelleTypeEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_EN, $libelleTypeEn, $comparison);
    }

    /**
     * Filter the query on the libelle_type_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeEs('fooValue');   // WHERE libelle_type_es = 'fooValue'
     * $query->filterByLibelleTypeEs('%fooValue%'); // WHERE libelle_type_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeEs($libelleTypeEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeEs)) {
                $libelleTypeEs = str_replace('*', '%', $libelleTypeEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_ES, $libelleTypeEs, $comparison);
    }

    /**
     * Filter the query on the libelle_type_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeSu('fooValue');   // WHERE libelle_type_su = 'fooValue'
     * $query->filterByLibelleTypeSu('%fooValue%'); // WHERE libelle_type_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeSu($libelleTypeSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeSu)) {
                $libelleTypeSu = str_replace('*', '%', $libelleTypeSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_SU, $libelleTypeSu, $comparison);
    }

    /**
     * Filter the query on the libelle_type_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeDu('fooValue');   // WHERE libelle_type_du = 'fooValue'
     * $query->filterByLibelleTypeDu('%fooValue%'); // WHERE libelle_type_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeDu($libelleTypeDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeDu)) {
                $libelleTypeDu = str_replace('*', '%', $libelleTypeDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_DU, $libelleTypeDu, $comparison);
    }

    /**
     * Filter the query on the libelle_type_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeCz('fooValue');   // WHERE libelle_type_cz = 'fooValue'
     * $query->filterByLibelleTypeCz('%fooValue%'); // WHERE libelle_type_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeCz($libelleTypeCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeCz)) {
                $libelleTypeCz = str_replace('*', '%', $libelleTypeCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_CZ, $libelleTypeCz, $comparison);
    }

    /**
     * Filter the query on the libelle_type_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeAr('fooValue');   // WHERE libelle_type_ar = 'fooValue'
     * $query->filterByLibelleTypeAr('%fooValue%'); // WHERE libelle_type_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeAr($libelleTypeAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeAr)) {
                $libelleTypeAr = str_replace('*', '%', $libelleTypeAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_AR, $libelleTypeAr, $comparison);
    }

    /**
     * Filter the query on the libelle_type_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTypeIt('fooValue');   // WHERE libelle_type_it = 'fooValue'
     * $query->filterByLibelleTypeIt('%fooValue%'); // WHERE libelle_type_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTypeIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByLibelleTypeIt($libelleTypeIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTypeIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTypeIt)) {
                $libelleTypeIt = str_replace('*', '%', $libelleTypeIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::LIBELLE_TYPE_IT, $libelleTypeIt, $comparison);
    }

    /**
     * Filter the query on the id_avis_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvisMarche(1234); // WHERE id_avis_marche = 1234
     * $query->filterByIdAvisMarche(array(12, 34)); // WHERE id_avis_marche IN (12, 34)
     * $query->filterByIdAvisMarche(array('min' => 12)); // WHERE id_avis_marche >= 12
     * $query->filterByIdAvisMarche(array('max' => 12)); // WHERE id_avis_marche <= 12
     * </code>
     *
     * @param     mixed $idAvisMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function filterByIdAvisMarche($idAvisMarche = null, $comparison = null)
    {
        if (is_array($idAvisMarche)) {
            $useMinMax = false;
            if (isset($idAvisMarche['min'])) {
                $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID_AVIS_MARCHE, $idAvisMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvisMarche['max'])) {
                $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID_AVIS_MARCHE, $idAvisMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielTypeXmlPeer::ID_AVIS_MARCHE, $idAvisMarche, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielTypeXml $commonReferentielTypeXml Object to remove from the list of results
     *
     * @return CommonReferentielTypeXmlQuery The current query, for fluid interface
     */
    public function prune($commonReferentielTypeXml = null)
    {
        if ($commonReferentielTypeXml) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonReferentielTypeXmlPeer::ID), $commonReferentielTypeXml->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonReferentielTypeXmlPeer::ORGANISME), $commonReferentielTypeXml->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
