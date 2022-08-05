<?php


/**
 * Base class that represents a query for the 'Partenaire' table.
 *
 * 
 *
 * @method CommonPartenaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPartenaireQuery orderByInitials($order = Criteria::ASC) Order by the initials column
 * @method CommonPartenaireQuery orderByDescPartenaire($order = Criteria::ASC) Order by the desc_partenaire column
 * @method CommonPartenaireQuery orderByDescPartenaireFr($order = Criteria::ASC) Order by the desc_partenaire_fr column
 * @method CommonPartenaireQuery orderByDescPartenaireEn($order = Criteria::ASC) Order by the desc_partenaire_en column
 * @method CommonPartenaireQuery orderByDescPartenaireEs($order = Criteria::ASC) Order by the desc_partenaire_es column
 * @method CommonPartenaireQuery orderByDescPartenaireIt($order = Criteria::ASC) Order by the desc_partenaire_it column
 * @method CommonPartenaireQuery orderByDescPartenaireAr($order = Criteria::ASC) Order by the desc_partenaire_ar column
 * @method CommonPartenaireQuery orderByDescPartenaireSu($order = Criteria::ASC) Order by the desc_partenaire_su column
 * @method CommonPartenaireQuery orderByLienImg($order = Criteria::ASC) Order by the lien_img column
 * @method CommonPartenaireQuery orderByLienExterne($order = Criteria::ASC) Order by the lien_externe column
 * @method CommonPartenaireQuery orderByTitle($order = Criteria::ASC) Order by the title column
 *
 * @method CommonPartenaireQuery groupById() Group by the id column
 * @method CommonPartenaireQuery groupByInitials() Group by the initials column
 * @method CommonPartenaireQuery groupByDescPartenaire() Group by the desc_partenaire column
 * @method CommonPartenaireQuery groupByDescPartenaireFr() Group by the desc_partenaire_fr column
 * @method CommonPartenaireQuery groupByDescPartenaireEn() Group by the desc_partenaire_en column
 * @method CommonPartenaireQuery groupByDescPartenaireEs() Group by the desc_partenaire_es column
 * @method CommonPartenaireQuery groupByDescPartenaireIt() Group by the desc_partenaire_it column
 * @method CommonPartenaireQuery groupByDescPartenaireAr() Group by the desc_partenaire_ar column
 * @method CommonPartenaireQuery groupByDescPartenaireSu() Group by the desc_partenaire_su column
 * @method CommonPartenaireQuery groupByLienImg() Group by the lien_img column
 * @method CommonPartenaireQuery groupByLienExterne() Group by the lien_externe column
 * @method CommonPartenaireQuery groupByTitle() Group by the title column
 *
 * @method CommonPartenaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPartenaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPartenaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPartenaire findOne(PropelPDO $con = null) Return the first CommonPartenaire matching the query
 * @method CommonPartenaire findOneOrCreate(PropelPDO $con = null) Return the first CommonPartenaire matching the query, or a new CommonPartenaire object populated from the query conditions when no match is found
 *
 * @method CommonPartenaire findOneByInitials(string $initials) Return the first CommonPartenaire filtered by the initials column
 * @method CommonPartenaire findOneByDescPartenaire(string $desc_partenaire) Return the first CommonPartenaire filtered by the desc_partenaire column
 * @method CommonPartenaire findOneByDescPartenaireFr(string $desc_partenaire_fr) Return the first CommonPartenaire filtered by the desc_partenaire_fr column
 * @method CommonPartenaire findOneByDescPartenaireEn(string $desc_partenaire_en) Return the first CommonPartenaire filtered by the desc_partenaire_en column
 * @method CommonPartenaire findOneByDescPartenaireEs(string $desc_partenaire_es) Return the first CommonPartenaire filtered by the desc_partenaire_es column
 * @method CommonPartenaire findOneByDescPartenaireIt(string $desc_partenaire_it) Return the first CommonPartenaire filtered by the desc_partenaire_it column
 * @method CommonPartenaire findOneByDescPartenaireAr(string $desc_partenaire_ar) Return the first CommonPartenaire filtered by the desc_partenaire_ar column
 * @method CommonPartenaire findOneByDescPartenaireSu(string $desc_partenaire_su) Return the first CommonPartenaire filtered by the desc_partenaire_su column
 * @method CommonPartenaire findOneByLienImg(string $lien_img) Return the first CommonPartenaire filtered by the lien_img column
 * @method CommonPartenaire findOneByLienExterne(string $lien_externe) Return the first CommonPartenaire filtered by the lien_externe column
 * @method CommonPartenaire findOneByTitle(string $title) Return the first CommonPartenaire filtered by the title column
 *
 * @method array findById(int $id) Return CommonPartenaire objects filtered by the id column
 * @method array findByInitials(string $initials) Return CommonPartenaire objects filtered by the initials column
 * @method array findByDescPartenaire(string $desc_partenaire) Return CommonPartenaire objects filtered by the desc_partenaire column
 * @method array findByDescPartenaireFr(string $desc_partenaire_fr) Return CommonPartenaire objects filtered by the desc_partenaire_fr column
 * @method array findByDescPartenaireEn(string $desc_partenaire_en) Return CommonPartenaire objects filtered by the desc_partenaire_en column
 * @method array findByDescPartenaireEs(string $desc_partenaire_es) Return CommonPartenaire objects filtered by the desc_partenaire_es column
 * @method array findByDescPartenaireIt(string $desc_partenaire_it) Return CommonPartenaire objects filtered by the desc_partenaire_it column
 * @method array findByDescPartenaireAr(string $desc_partenaire_ar) Return CommonPartenaire objects filtered by the desc_partenaire_ar column
 * @method array findByDescPartenaireSu(string $desc_partenaire_su) Return CommonPartenaire objects filtered by the desc_partenaire_su column
 * @method array findByLienImg(string $lien_img) Return CommonPartenaire objects filtered by the lien_img column
 * @method array findByLienExterne(string $lien_externe) Return CommonPartenaire objects filtered by the lien_externe column
 * @method array findByTitle(string $title) Return CommonPartenaire objects filtered by the title column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPartenaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPartenaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPartenaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPartenaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPartenaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPartenaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPartenaireQuery) {
            return $criteria;
        }
        $query = new CommonPartenaireQuery();
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
     * @return   CommonPartenaire|CommonPartenaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPartenairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPartenairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPartenaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
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
     * @return                 CommonPartenaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `initials`, `desc_partenaire`, `desc_partenaire_fr`, `desc_partenaire_en`, `desc_partenaire_es`, `desc_partenaire_it`, `desc_partenaire_ar`, `desc_partenaire_su`, `lien_img`, `lien_externe`, `title` FROM `Partenaire` WHERE `id` = :p0';
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
            $obj = new CommonPartenaire();
            $obj->hydrate($row);
            CommonPartenairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonPartenaire|CommonPartenaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPartenaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonPartenairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonPartenairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPartenairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPartenairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the initials column
     *
     * Example usage:
     * <code>
     * $query->filterByInitials('fooValue');   // WHERE initials = 'fooValue'
     * $query->filterByInitials('%fooValue%'); // WHERE initials LIKE '%fooValue%'
     * </code>
     *
     * @param     string $initials The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByInitials($initials = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($initials)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $initials)) {
                $initials = str_replace('*', '%', $initials);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::INITIALS, $initials, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaire('fooValue');   // WHERE desc_partenaire = 'fooValue'
     * $query->filterByDescPartenaire('%fooValue%'); // WHERE desc_partenaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaire($descPartenaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaire)) {
                $descPartenaire = str_replace('*', '%', $descPartenaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE, $descPartenaire, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaireFr('fooValue');   // WHERE desc_partenaire_fr = 'fooValue'
     * $query->filterByDescPartenaireFr('%fooValue%'); // WHERE desc_partenaire_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaireFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaireFr($descPartenaireFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaireFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaireFr)) {
                $descPartenaireFr = str_replace('*', '%', $descPartenaireFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE_FR, $descPartenaireFr, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaireEn('fooValue');   // WHERE desc_partenaire_en = 'fooValue'
     * $query->filterByDescPartenaireEn('%fooValue%'); // WHERE desc_partenaire_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaireEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaireEn($descPartenaireEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaireEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaireEn)) {
                $descPartenaireEn = str_replace('*', '%', $descPartenaireEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE_EN, $descPartenaireEn, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaireEs('fooValue');   // WHERE desc_partenaire_es = 'fooValue'
     * $query->filterByDescPartenaireEs('%fooValue%'); // WHERE desc_partenaire_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaireEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaireEs($descPartenaireEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaireEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaireEs)) {
                $descPartenaireEs = str_replace('*', '%', $descPartenaireEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE_ES, $descPartenaireEs, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaireIt('fooValue');   // WHERE desc_partenaire_it = 'fooValue'
     * $query->filterByDescPartenaireIt('%fooValue%'); // WHERE desc_partenaire_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaireIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaireIt($descPartenaireIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaireIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaireIt)) {
                $descPartenaireIt = str_replace('*', '%', $descPartenaireIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE_IT, $descPartenaireIt, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaireAr('fooValue');   // WHERE desc_partenaire_ar = 'fooValue'
     * $query->filterByDescPartenaireAr('%fooValue%'); // WHERE desc_partenaire_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaireAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaireAr($descPartenaireAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaireAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaireAr)) {
                $descPartenaireAr = str_replace('*', '%', $descPartenaireAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE_AR, $descPartenaireAr, $comparison);
    }

    /**
     * Filter the query on the desc_partenaire_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDescPartenaireSu('fooValue');   // WHERE desc_partenaire_su = 'fooValue'
     * $query->filterByDescPartenaireSu('%fooValue%'); // WHERE desc_partenaire_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descPartenaireSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByDescPartenaireSu($descPartenaireSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descPartenaireSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descPartenaireSu)) {
                $descPartenaireSu = str_replace('*', '%', $descPartenaireSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::DESC_PARTENAIRE_SU, $descPartenaireSu, $comparison);
    }

    /**
     * Filter the query on the lien_img column
     *
     * Example usage:
     * <code>
     * $query->filterByLienImg('fooValue');   // WHERE lien_img = 'fooValue'
     * $query->filterByLienImg('%fooValue%'); // WHERE lien_img LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lienImg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByLienImg($lienImg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lienImg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lienImg)) {
                $lienImg = str_replace('*', '%', $lienImg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::LIEN_IMG, $lienImg, $comparison);
    }

    /**
     * Filter the query on the lien_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByLienExterne('fooValue');   // WHERE lien_externe = 'fooValue'
     * $query->filterByLienExterne('%fooValue%'); // WHERE lien_externe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lienExterne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByLienExterne($lienExterne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lienExterne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lienExterne)) {
                $lienExterne = str_replace('*', '%', $lienExterne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::LIEN_EXTERNE, $lienExterne, $comparison);
    }

    /**
     * Filter the query on the title column
     *
     * Example usage:
     * <code>
     * $query->filterByTitle('fooValue');   // WHERE title = 'fooValue'
     * $query->filterByTitle('%fooValue%'); // WHERE title LIKE '%fooValue%'
     * </code>
     *
     * @param     string $title The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function filterByTitle($title = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($title)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $title)) {
                $title = str_replace('*', '%', $title);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPartenairePeer::TITLE, $title, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPartenaire $commonPartenaire Object to remove from the list of results
     *
     * @return CommonPartenaireQuery The current query, for fluid interface
     */
    public function prune($commonPartenaire = null)
    {
        if ($commonPartenaire) {
            $this->addUsingAlias(CommonPartenairePeer::ID, $commonPartenaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
