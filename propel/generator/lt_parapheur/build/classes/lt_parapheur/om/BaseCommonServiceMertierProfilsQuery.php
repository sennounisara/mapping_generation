<?php


/**
 * Base class that represents a query for the 'Service_Mertier_Profils' table.
 *
 * 
 *
 * @method CommonServiceMertierProfilsQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonServiceMertierProfilsQuery orderByIdInterne($order = Criteria::ASC) Order by the id_interne column
 * @method CommonServiceMertierProfilsQuery orderByIdServiceMetier($order = Criteria::ASC) Order by the id_service_metier column
 * @method CommonServiceMertierProfilsQuery orderByIdExterne($order = Criteria::ASC) Order by the id_externe column
 * @method CommonServiceMertierProfilsQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonServiceMertierProfilsQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonServiceMertierProfilsQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonServiceMertierProfilsQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonServiceMertierProfilsQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonServiceMertierProfilsQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonServiceMertierProfilsQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonServiceMertierProfilsQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonServiceMertierProfilsQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 * @method CommonServiceMertierProfilsQuery orderByShowProfileForHyperadminOnly($order = Criteria::ASC) Order by the show_profile_for_hyperadmin_only column
 *
 * @method CommonServiceMertierProfilsQuery groupByIdAuto() Group by the id_auto column
 * @method CommonServiceMertierProfilsQuery groupByIdInterne() Group by the id_interne column
 * @method CommonServiceMertierProfilsQuery groupByIdServiceMetier() Group by the id_service_metier column
 * @method CommonServiceMertierProfilsQuery groupByIdExterne() Group by the id_externe column
 * @method CommonServiceMertierProfilsQuery groupByLibelle() Group by the libelle column
 * @method CommonServiceMertierProfilsQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonServiceMertierProfilsQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonServiceMertierProfilsQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonServiceMertierProfilsQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonServiceMertierProfilsQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonServiceMertierProfilsQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonServiceMertierProfilsQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonServiceMertierProfilsQuery groupByLibelleIt() Group by the libelle_it column
 * @method CommonServiceMertierProfilsQuery groupByShowProfileForHyperadminOnly() Group by the show_profile_for_hyperadmin_only column
 *
 * @method CommonServiceMertierProfilsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonServiceMertierProfilsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonServiceMertierProfilsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonServiceMertierProfils findOne(PropelPDO $con = null) Return the first CommonServiceMertierProfils matching the query
 * @method CommonServiceMertierProfils findOneOrCreate(PropelPDO $con = null) Return the first CommonServiceMertierProfils matching the query, or a new CommonServiceMertierProfils object populated from the query conditions when no match is found
 *
 * @method CommonServiceMertierProfils findOneByIdInterne(int $id_interne) Return the first CommonServiceMertierProfils filtered by the id_interne column
 * @method CommonServiceMertierProfils findOneByIdServiceMetier(int $id_service_metier) Return the first CommonServiceMertierProfils filtered by the id_service_metier column
 * @method CommonServiceMertierProfils findOneByIdExterne(int $id_externe) Return the first CommonServiceMertierProfils filtered by the id_externe column
 * @method CommonServiceMertierProfils findOneByLibelle(string $libelle) Return the first CommonServiceMertierProfils filtered by the libelle column
 * @method CommonServiceMertierProfils findOneByLibelleFr(string $libelle_fr) Return the first CommonServiceMertierProfils filtered by the libelle_fr column
 * @method CommonServiceMertierProfils findOneByLibelleEn(string $libelle_en) Return the first CommonServiceMertierProfils filtered by the libelle_en column
 * @method CommonServiceMertierProfils findOneByLibelleEs(string $libelle_es) Return the first CommonServiceMertierProfils filtered by the libelle_es column
 * @method CommonServiceMertierProfils findOneByLibelleSu(string $libelle_su) Return the first CommonServiceMertierProfils filtered by the libelle_su column
 * @method CommonServiceMertierProfils findOneByLibelleDu(string $libelle_du) Return the first CommonServiceMertierProfils filtered by the libelle_du column
 * @method CommonServiceMertierProfils findOneByLibelleCz(string $libelle_cz) Return the first CommonServiceMertierProfils filtered by the libelle_cz column
 * @method CommonServiceMertierProfils findOneByLibelleAr(string $libelle_ar) Return the first CommonServiceMertierProfils filtered by the libelle_ar column
 * @method CommonServiceMertierProfils findOneByLibelleIt(string $libelle_it) Return the first CommonServiceMertierProfils filtered by the libelle_it column
 * @method CommonServiceMertierProfils findOneByShowProfileForHyperadminOnly(string $show_profile_for_hyperadmin_only) Return the first CommonServiceMertierProfils filtered by the show_profile_for_hyperadmin_only column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonServiceMertierProfils objects filtered by the id_auto column
 * @method array findByIdInterne(int $id_interne) Return CommonServiceMertierProfils objects filtered by the id_interne column
 * @method array findByIdServiceMetier(int $id_service_metier) Return CommonServiceMertierProfils objects filtered by the id_service_metier column
 * @method array findByIdExterne(int $id_externe) Return CommonServiceMertierProfils objects filtered by the id_externe column
 * @method array findByLibelle(string $libelle) Return CommonServiceMertierProfils objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonServiceMertierProfils objects filtered by the libelle_fr column
 * @method array findByLibelleEn(string $libelle_en) Return CommonServiceMertierProfils objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonServiceMertierProfils objects filtered by the libelle_es column
 * @method array findByLibelleSu(string $libelle_su) Return CommonServiceMertierProfils objects filtered by the libelle_su column
 * @method array findByLibelleDu(string $libelle_du) Return CommonServiceMertierProfils objects filtered by the libelle_du column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonServiceMertierProfils objects filtered by the libelle_cz column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonServiceMertierProfils objects filtered by the libelle_ar column
 * @method array findByLibelleIt(string $libelle_it) Return CommonServiceMertierProfils objects filtered by the libelle_it column
 * @method array findByShowProfileForHyperadminOnly(string $show_profile_for_hyperadmin_only) Return CommonServiceMertierProfils objects filtered by the show_profile_for_hyperadmin_only column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonServiceMertierProfilsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonServiceMertierProfilsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonServiceMertierProfils', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonServiceMertierProfilsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonServiceMertierProfilsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonServiceMertierProfilsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonServiceMertierProfilsQuery) {
            return $criteria;
        }
        $query = new CommonServiceMertierProfilsQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonServiceMertierProfils|CommonServiceMertierProfils[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonServiceMertierProfilsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceMertierProfilsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonServiceMertierProfils A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonServiceMertierProfils A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `id_interne`, `id_service_metier`, `id_externe`, `libelle`, `libelle_fr`, `libelle_en`, `libelle_es`, `libelle_su`, `libelle_du`, `libelle_cz`, `libelle_ar`, `libelle_it`, `show_profile_for_hyperadmin_only` FROM `Service_Mertier_Profils` WHERE `id_auto` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonServiceMertierProfils();
            $obj->hydrate($row);
            CommonServiceMertierProfilsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonServiceMertierProfils|CommonServiceMertierProfils[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonServiceMertierProfils[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the id_interne column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInterne(1234); // WHERE id_interne = 1234
     * $query->filterByIdInterne(array(12, 34)); // WHERE id_interne IN (12, 34)
     * $query->filterByIdInterne(array('min' => 12)); // WHERE id_interne >= 12
     * $query->filterByIdInterne(array('max' => 12)); // WHERE id_interne <= 12
     * </code>
     *
     * @param     mixed $idInterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByIdInterne($idInterne = null, $comparison = null)
    {
        if (is_array($idInterne)) {
            $useMinMax = false;
            if (isset($idInterne['min'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_INTERNE, $idInterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInterne['max'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_INTERNE, $idInterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_INTERNE, $idInterne, $comparison);
    }

    /**
     * Filter the query on the id_service_metier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceMetier(1234); // WHERE id_service_metier = 1234
     * $query->filterByIdServiceMetier(array(12, 34)); // WHERE id_service_metier IN (12, 34)
     * $query->filterByIdServiceMetier(array('min' => 12)); // WHERE id_service_metier >= 12
     * $query->filterByIdServiceMetier(array('max' => 12)); // WHERE id_service_metier <= 12
     * </code>
     *
     * @param     mixed $idServiceMetier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByIdServiceMetier($idServiceMetier = null, $comparison = null)
    {
        if (is_array($idServiceMetier)) {
            $useMinMax = false;
            if (isset($idServiceMetier['min'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER, $idServiceMetier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceMetier['max'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER, $idServiceMetier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_SERVICE_METIER, $idServiceMetier, $comparison);
    }

    /**
     * Filter the query on the id_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE id_externe = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE id_externe IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE id_externe >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE id_externe <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_EXTERNE, $idExterne, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_EN, $libelleEn, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_ES, $libelleEs, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_SU, $libelleSu, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_DU, $libelleDu, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_CZ, $libelleCz, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Filter the query on the show_profile_for_hyperadmin_only column
     *
     * Example usage:
     * <code>
     * $query->filterByShowProfileForHyperadminOnly('fooValue');   // WHERE show_profile_for_hyperadmin_only = 'fooValue'
     * $query->filterByShowProfileForHyperadminOnly('%fooValue%'); // WHERE show_profile_for_hyperadmin_only LIKE '%fooValue%'
     * </code>
     *
     * @param     string $showProfileForHyperadminOnly The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function filterByShowProfileForHyperadminOnly($showProfileForHyperadminOnly = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($showProfileForHyperadminOnly)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $showProfileForHyperadminOnly)) {
                $showProfileForHyperadminOnly = str_replace('*', '%', $showProfileForHyperadminOnly);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceMertierProfilsPeer::SHOW_PROFILE_FOR_HYPERADMIN_ONLY, $showProfileForHyperadminOnly, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonServiceMertierProfils $commonServiceMertierProfils Object to remove from the list of results
     *
     * @return CommonServiceMertierProfilsQuery The current query, for fluid interface
     */
    public function prune($commonServiceMertierProfils = null)
    {
        if ($commonServiceMertierProfils) {
            $this->addUsingAlias(CommonServiceMertierProfilsPeer::ID_AUTO, $commonServiceMertierProfils->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
