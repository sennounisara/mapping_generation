<?php


/**
 * Base class that represents a query for the 't_referentiel_certificat' table.
 *
 * 
 *
 * @method CommonTReferentielCertificatQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTReferentielCertificatQuery orderByNomReferentielCertificat($order = Criteria::ASC) Order by the nom_referentiel_certificat column
 * @method CommonTReferentielCertificatQuery orderByStatutReferentielCertificat($order = Criteria::ASC) Order by the statut_referentiel_certificat column
 * @method CommonTReferentielCertificatQuery orderByNomReferentielFonctionnel($order = Criteria::ASC) Order by the nom_referentiel_fonctionnel column
 * @method CommonTReferentielCertificatQuery orderByMessage($order = Criteria::ASC) Order by the message column
 *
 * @method CommonTReferentielCertificatQuery groupById() Group by the id column
 * @method CommonTReferentielCertificatQuery groupByNomReferentielCertificat() Group by the nom_referentiel_certificat column
 * @method CommonTReferentielCertificatQuery groupByStatutReferentielCertificat() Group by the statut_referentiel_certificat column
 * @method CommonTReferentielCertificatQuery groupByNomReferentielFonctionnel() Group by the nom_referentiel_fonctionnel column
 * @method CommonTReferentielCertificatQuery groupByMessage() Group by the message column
 *
 * @method CommonTReferentielCertificatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTReferentielCertificatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTReferentielCertificatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTReferentielCertificat findOne(PropelPDO $con = null) Return the first CommonTReferentielCertificat matching the query
 * @method CommonTReferentielCertificat findOneOrCreate(PropelPDO $con = null) Return the first CommonTReferentielCertificat matching the query, or a new CommonTReferentielCertificat object populated from the query conditions when no match is found
 *
 * @method CommonTReferentielCertificat findOneByNomReferentielCertificat(string $nom_referentiel_certificat) Return the first CommonTReferentielCertificat filtered by the nom_referentiel_certificat column
 * @method CommonTReferentielCertificat findOneByStatutReferentielCertificat(int $statut_referentiel_certificat) Return the first CommonTReferentielCertificat filtered by the statut_referentiel_certificat column
 * @method CommonTReferentielCertificat findOneByNomReferentielFonctionnel(string $nom_referentiel_fonctionnel) Return the first CommonTReferentielCertificat filtered by the nom_referentiel_fonctionnel column
 * @method CommonTReferentielCertificat findOneByMessage(string $message) Return the first CommonTReferentielCertificat filtered by the message column
 *
 * @method array findById(int $id) Return CommonTReferentielCertificat objects filtered by the id column
 * @method array findByNomReferentielCertificat(string $nom_referentiel_certificat) Return CommonTReferentielCertificat objects filtered by the nom_referentiel_certificat column
 * @method array findByStatutReferentielCertificat(int $statut_referentiel_certificat) Return CommonTReferentielCertificat objects filtered by the statut_referentiel_certificat column
 * @method array findByNomReferentielFonctionnel(string $nom_referentiel_fonctionnel) Return CommonTReferentielCertificat objects filtered by the nom_referentiel_fonctionnel column
 * @method array findByMessage(string $message) Return CommonTReferentielCertificat objects filtered by the message column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTReferentielCertificatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTReferentielCertificatQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTReferentielCertificat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTReferentielCertificatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTReferentielCertificatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTReferentielCertificatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTReferentielCertificatQuery) {
            return $criteria;
        }
        $query = new CommonTReferentielCertificatQuery();
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
     * @return   CommonTReferentielCertificat|CommonTReferentielCertificat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTReferentielCertificatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTReferentielCertificatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTReferentielCertificat A model object, or null if the key is not found
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
     * @return                 CommonTReferentielCertificat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nom_referentiel_certificat`, `statut_referentiel_certificat`, `nom_referentiel_fonctionnel`, `message` FROM `t_referentiel_certificat` WHERE `id` = :p0';
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
            $obj = new CommonTReferentielCertificat();
            $obj->hydrate($row);
            CommonTReferentielCertificatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTReferentielCertificat|CommonTReferentielCertificat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTReferentielCertificat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::ID, $keys, Criteria::IN);
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
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTReferentielCertificatPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTReferentielCertificatPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nom_referentiel_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByNomReferentielCertificat('fooValue');   // WHERE nom_referentiel_certificat = 'fooValue'
     * $query->filterByNomReferentielCertificat('%fooValue%'); // WHERE nom_referentiel_certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomReferentielCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterByNomReferentielCertificat($nomReferentielCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomReferentielCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomReferentielCertificat)) {
                $nomReferentielCertificat = str_replace('*', '%', $nomReferentielCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::NOM_REFERENTIEL_CERTIFICAT, $nomReferentielCertificat, $comparison);
    }

    /**
     * Filter the query on the statut_referentiel_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutReferentielCertificat(1234); // WHERE statut_referentiel_certificat = 1234
     * $query->filterByStatutReferentielCertificat(array(12, 34)); // WHERE statut_referentiel_certificat IN (12, 34)
     * $query->filterByStatutReferentielCertificat(array('min' => 12)); // WHERE statut_referentiel_certificat >= 12
     * $query->filterByStatutReferentielCertificat(array('max' => 12)); // WHERE statut_referentiel_certificat <= 12
     * </code>
     *
     * @param     mixed $statutReferentielCertificat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterByStatutReferentielCertificat($statutReferentielCertificat = null, $comparison = null)
    {
        if (is_array($statutReferentielCertificat)) {
            $useMinMax = false;
            if (isset($statutReferentielCertificat['min'])) {
                $this->addUsingAlias(CommonTReferentielCertificatPeer::STATUT_REFERENTIEL_CERTIFICAT, $statutReferentielCertificat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutReferentielCertificat['max'])) {
                $this->addUsingAlias(CommonTReferentielCertificatPeer::STATUT_REFERENTIEL_CERTIFICAT, $statutReferentielCertificat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::STATUT_REFERENTIEL_CERTIFICAT, $statutReferentielCertificat, $comparison);
    }

    /**
     * Filter the query on the nom_referentiel_fonctionnel column
     *
     * Example usage:
     * <code>
     * $query->filterByNomReferentielFonctionnel('fooValue');   // WHERE nom_referentiel_fonctionnel = 'fooValue'
     * $query->filterByNomReferentielFonctionnel('%fooValue%'); // WHERE nom_referentiel_fonctionnel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomReferentielFonctionnel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterByNomReferentielFonctionnel($nomReferentielFonctionnel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomReferentielFonctionnel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomReferentielFonctionnel)) {
                $nomReferentielFonctionnel = str_replace('*', '%', $nomReferentielFonctionnel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::NOM_REFERENTIEL_FONCTIONNEL, $nomReferentielFonctionnel, $comparison);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTReferentielCertificatPeer::MESSAGE, $message, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTReferentielCertificat $commonTReferentielCertificat Object to remove from the list of results
     *
     * @return CommonTReferentielCertificatQuery The current query, for fluid interface
     */
    public function prune($commonTReferentielCertificat = null)
    {
        if ($commonTReferentielCertificat) {
            $this->addUsingAlias(CommonTReferentielCertificatPeer::ID, $commonTReferentielCertificat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
