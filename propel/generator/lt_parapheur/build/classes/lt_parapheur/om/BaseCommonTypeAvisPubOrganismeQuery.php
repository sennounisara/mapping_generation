<?php


/**
 * Base class that represents a query for the 'Type_Avis_Pub_Organisme' table.
 *
 * 
 *
 * @method CommonTypeAvisPubOrganismeQuery orderByIdTypeAvis($order = Criteria::ASC) Order by the id_type_avis column
 * @method CommonTypeAvisPubOrganismeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTypeAvisPubOrganismeQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 * @method CommonTypeAvisPubOrganismeQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonTypeAvisPubOrganismeQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method CommonTypeAvisPubOrganismeQuery orderByResourceFormulaire($order = Criteria::ASC) Order by the resource_formulaire column
 *
 * @method CommonTypeAvisPubOrganismeQuery groupByIdTypeAvis() Group by the id_type_avis column
 * @method CommonTypeAvisPubOrganismeQuery groupByOrganisme() Group by the organisme column
 * @method CommonTypeAvisPubOrganismeQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelle() Group by the libelle column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleIt() Group by the libelle_it column
 * @method CommonTypeAvisPubOrganismeQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonTypeAvisPubOrganismeQuery groupByRegion() Group by the region column
 * @method CommonTypeAvisPubOrganismeQuery groupByResourceFormulaire() Group by the resource_formulaire column
 *
 * @method CommonTypeAvisPubOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeAvisPubOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeAvisPubOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeAvisPubOrganisme findOne(PropelPDO $con = null) Return the first CommonTypeAvisPubOrganisme matching the query
 * @method CommonTypeAvisPubOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeAvisPubOrganisme matching the query, or a new CommonTypeAvisPubOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonTypeAvisPubOrganisme findOneByIdTypeAvis(int $id_type_avis) Return the first CommonTypeAvisPubOrganisme filtered by the id_type_avis column
 * @method CommonTypeAvisPubOrganisme findOneByOrganisme(string $organisme) Return the first CommonTypeAvisPubOrganisme filtered by the organisme column
 * @method CommonTypeAvisPubOrganisme findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonTypeAvisPubOrganisme filtered by the id_type_procedure column
 * @method CommonTypeAvisPubOrganisme findOneByLibelle(string $libelle) Return the first CommonTypeAvisPubOrganisme filtered by the libelle column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleAr(string $libelle_ar) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_ar column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleCz(string $libelle_cz) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_cz column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleDu(string $libelle_du) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_du column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleEn(string $libelle_en) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_en column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleEs(string $libelle_es) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_es column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleFr(string $libelle_fr) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_fr column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleIt(string $libelle_it) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_it column
 * @method CommonTypeAvisPubOrganisme findOneByLibelleSu(string $libelle_su) Return the first CommonTypeAvisPubOrganisme filtered by the libelle_su column
 * @method CommonTypeAvisPubOrganisme findOneByRegion(int $region) Return the first CommonTypeAvisPubOrganisme filtered by the region column
 * @method CommonTypeAvisPubOrganisme findOneByResourceFormulaire(string $resource_formulaire) Return the first CommonTypeAvisPubOrganisme filtered by the resource_formulaire column
 *
 * @method array findByIdTypeAvis(int $id_type_avis) Return CommonTypeAvisPubOrganisme objects filtered by the id_type_avis column
 * @method array findByOrganisme(string $organisme) Return CommonTypeAvisPubOrganisme objects filtered by the organisme column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonTypeAvisPubOrganisme objects filtered by the id_type_procedure column
 * @method array findByLibelle(string $libelle) Return CommonTypeAvisPubOrganisme objects filtered by the libelle column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_ar column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_cz column
 * @method array findByLibelleDu(string $libelle_du) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_du column
 * @method array findByLibelleEn(string $libelle_en) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_es column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_fr column
 * @method array findByLibelleIt(string $libelle_it) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_it column
 * @method array findByLibelleSu(string $libelle_su) Return CommonTypeAvisPubOrganisme objects filtered by the libelle_su column
 * @method array findByRegion(int $region) Return CommonTypeAvisPubOrganisme objects filtered by the region column
 * @method array findByResourceFormulaire(string $resource_formulaire) Return CommonTypeAvisPubOrganisme objects filtered by the resource_formulaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeAvisPubOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeAvisPubOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeAvisPubOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeAvisPubOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeAvisPubOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeAvisPubOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeAvisPubOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonTypeAvisPubOrganismeQuery();
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
                         A Primary key composition: [$id_type_avis, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTypeAvisPubOrganisme|CommonTypeAvisPubOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeAvisPubOrganismePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPubOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeAvisPubOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_avis`, `organisme`, `id_type_procedure`, `libelle`, `libelle_ar`, `libelle_cz`, `libelle_du`, `libelle_en`, `libelle_es`, `libelle_fr`, `libelle_it`, `libelle_su`, `region`, `resource_formulaire` FROM `Type_Avis_Pub_Organisme` WHERE `id_type_avis` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTypeAvisPubOrganisme();
            $obj->hydrate($row);
            CommonTypeAvisPubOrganismePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTypeAvisPubOrganisme|CommonTypeAvisPubOrganisme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeAvisPubOrganisme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_AVIS, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTypeAvisPubOrganismePeer::ID_TYPE_AVIS, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTypeAvisPubOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_type_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeAvis(1234); // WHERE id_type_avis = 1234
     * $query->filterByIdTypeAvis(array(12, 34)); // WHERE id_type_avis IN (12, 34)
     * $query->filterByIdTypeAvis(array('min' => 12)); // WHERE id_type_avis >= 12
     * $query->filterByIdTypeAvis(array('max' => 12)); // WHERE id_type_avis <= 12
     * </code>
     *
     * @param     mixed $idTypeAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTypeAvis($idTypeAvis = null, $comparison = null)
    {
        if (is_array($idTypeAvis)) {
            $useMinMax = false;
            if (isset($idTypeAvis['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_AVIS, $idTypeAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeAvis['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_AVIS, $idTypeAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_AVIS, $idTypeAvis, $comparison);
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
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the libelle_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE libelle_ar = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE libelle_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the libelle_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleCz('fooValue');   // WHERE libelle_cz = 'fooValue'
     * $query->filterByLibelleCz('%fooValue%'); // WHERE libelle_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleCz($libelleCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleCz)) {
                $libelleCz = str_replace('*', '%', $libelleCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_CZ, $libelleCz, $comparison);
    }

    /**
     * Filter the query on the libelle_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleDu('fooValue');   // WHERE libelle_du = 'fooValue'
     * $query->filterByLibelleDu('%fooValue%'); // WHERE libelle_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleDu($libelleDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleDu)) {
                $libelleDu = str_replace('*', '%', $libelleDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_DU, $libelleDu, $comparison);
    }

    /**
     * Filter the query on the libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEn('fooValue');   // WHERE libelle_en = 'fooValue'
     * $query->filterByLibelleEn('%fooValue%'); // WHERE libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleEn($libelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEn)) {
                $libelleEn = str_replace('*', '%', $libelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query on the libelle_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEs('fooValue');   // WHERE libelle_es = 'fooValue'
     * $query->filterByLibelleEs('%fooValue%'); // WHERE libelle_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleEs($libelleEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEs)) {
                $libelleEs = str_replace('*', '%', $libelleEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_ES, $libelleEs, $comparison);
    }

    /**
     * Filter the query on the libelle_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE libelle_fr = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE libelle_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the libelle_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleIt('fooValue');   // WHERE libelle_it = 'fooValue'
     * $query->filterByLibelleIt('%fooValue%'); // WHERE libelle_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleIt($libelleIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleIt)) {
                $libelleIt = str_replace('*', '%', $libelleIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Filter the query on the libelle_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSu('fooValue');   // WHERE libelle_su = 'fooValue'
     * $query->filterByLibelleSu('%fooValue%'); // WHERE libelle_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByLibelleSu($libelleSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSu)) {
                $libelleSu = str_replace('*', '%', $libelleSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::LIBELLE_SU, $libelleSu, $comparison);
    }

    /**
     * Filter the query on the region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion(1234); // WHERE region = 1234
     * $query->filterByRegion(array(12, 34)); // WHERE region IN (12, 34)
     * $query->filterByRegion(array('min' => 12)); // WHERE region >= 12
     * $query->filterByRegion(array('max' => 12)); // WHERE region <= 12
     * </code>
     *
     * @param     mixed $region The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (is_array($region)) {
            $useMinMax = false;
            if (isset($region['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::REGION, $region['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($region['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::REGION, $region['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the resource_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByResourceFormulaire('fooValue');   // WHERE resource_formulaire = 'fooValue'
     * $query->filterByResourceFormulaire('%fooValue%'); // WHERE resource_formulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resourceFormulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function filterByResourceFormulaire($resourceFormulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resourceFormulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resourceFormulaire)) {
                $resourceFormulaire = str_replace('*', '%', $resourceFormulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubOrganismePeer::RESOURCE_FORMULAIRE, $resourceFormulaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeAvisPubOrganisme $commonTypeAvisPubOrganisme Object to remove from the list of results
     *
     * @return CommonTypeAvisPubOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonTypeAvisPubOrganisme = null)
    {
        if ($commonTypeAvisPubOrganisme) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTypeAvisPubOrganismePeer::ID_TYPE_AVIS), $commonTypeAvisPubOrganisme->getIdTypeAvis(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTypeAvisPubOrganismePeer::ORGANISME), $commonTypeAvisPubOrganisme->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
