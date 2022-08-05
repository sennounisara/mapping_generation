<?php


/**
 * Base class that represents a query for the 'Certificat_Agent' table.
 *
 * 
 *
 * @method CommonCertificatAgentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCertificatAgentQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonCertificatAgentQuery orderByDateDebut($order = Criteria::ASC) Order by the date_debut column
 * @method CommonCertificatAgentQuery orderByDateFin($order = Criteria::ASC) Order by the date_fin column
 * @method CommonCertificatAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonCertificatAgentQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonCertificatAgentQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonCertificatAgentQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonCertificatAgentQuery orderByStatutRevoque($order = Criteria::ASC) Order by the statut_revoque column
 * @method CommonCertificatAgentQuery orderByDateRevoquation($order = Criteria::ASC) Order by the date_revoquation column
 * @method CommonCertificatAgentQuery orderByMailAgent($order = Criteria::ASC) Order by the mail_agent column
 *
 * @method CommonCertificatAgentQuery groupById() Group by the id column
 * @method CommonCertificatAgentQuery groupByCertificat() Group by the certificat column
 * @method CommonCertificatAgentQuery groupByDateDebut() Group by the date_debut column
 * @method CommonCertificatAgentQuery groupByDateFin() Group by the date_fin column
 * @method CommonCertificatAgentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonCertificatAgentQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonCertificatAgentQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonCertificatAgentQuery groupByIdService() Group by the id_service column
 * @method CommonCertificatAgentQuery groupByStatutRevoque() Group by the statut_revoque column
 * @method CommonCertificatAgentQuery groupByDateRevoquation() Group by the date_revoquation column
 * @method CommonCertificatAgentQuery groupByMailAgent() Group by the mail_agent column
 *
 * @method CommonCertificatAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCertificatAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCertificatAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCertificatAgent findOne(PropelPDO $con = null) Return the first CommonCertificatAgent matching the query
 * @method CommonCertificatAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonCertificatAgent matching the query, or a new CommonCertificatAgent object populated from the query conditions when no match is found
 *
 * @method CommonCertificatAgent findOneByCertificat(string $certificat) Return the first CommonCertificatAgent filtered by the certificat column
 * @method CommonCertificatAgent findOneByDateDebut(string $date_debut) Return the first CommonCertificatAgent filtered by the date_debut column
 * @method CommonCertificatAgent findOneByDateFin(string $date_fin) Return the first CommonCertificatAgent filtered by the date_fin column
 * @method CommonCertificatAgent findOneByIdAgent(int $id_agent) Return the first CommonCertificatAgent filtered by the id_agent column
 * @method CommonCertificatAgent findOneByNomAgent(string $nom_agent) Return the first CommonCertificatAgent filtered by the nom_agent column
 * @method CommonCertificatAgent findOneByPrenomAgent(string $prenom_agent) Return the first CommonCertificatAgent filtered by the prenom_agent column
 * @method CommonCertificatAgent findOneByIdService(int $id_service) Return the first CommonCertificatAgent filtered by the id_service column
 * @method CommonCertificatAgent findOneByStatutRevoque(string $statut_revoque) Return the first CommonCertificatAgent filtered by the statut_revoque column
 * @method CommonCertificatAgent findOneByDateRevoquation(string $date_revoquation) Return the first CommonCertificatAgent filtered by the date_revoquation column
 * @method CommonCertificatAgent findOneByMailAgent(string $mail_agent) Return the first CommonCertificatAgent filtered by the mail_agent column
 *
 * @method array findById(int $id) Return CommonCertificatAgent objects filtered by the id column
 * @method array findByCertificat(string $certificat) Return CommonCertificatAgent objects filtered by the certificat column
 * @method array findByDateDebut(string $date_debut) Return CommonCertificatAgent objects filtered by the date_debut column
 * @method array findByDateFin(string $date_fin) Return CommonCertificatAgent objects filtered by the date_fin column
 * @method array findByIdAgent(int $id_agent) Return CommonCertificatAgent objects filtered by the id_agent column
 * @method array findByNomAgent(string $nom_agent) Return CommonCertificatAgent objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonCertificatAgent objects filtered by the prenom_agent column
 * @method array findByIdService(int $id_service) Return CommonCertificatAgent objects filtered by the id_service column
 * @method array findByStatutRevoque(string $statut_revoque) Return CommonCertificatAgent objects filtered by the statut_revoque column
 * @method array findByDateRevoquation(string $date_revoquation) Return CommonCertificatAgent objects filtered by the date_revoquation column
 * @method array findByMailAgent(string $mail_agent) Return CommonCertificatAgent objects filtered by the mail_agent column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCertificatAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCertificatAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCertificatAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCertificatAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCertificatAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCertificatAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCertificatAgentQuery) {
            return $criteria;
        }
        $query = new CommonCertificatAgentQuery();
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
     * @return   CommonCertificatAgent|CommonCertificatAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCertificatAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatAgent A model object, or null if the key is not found
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
     * @return                 CommonCertificatAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `certificat`, `date_debut`, `date_fin`, `id_agent`, `nom_agent`, `prenom_agent`, `id_service`, `statut_revoque`, `date_revoquation`, `mail_agent` FROM `Certificat_Agent` WHERE `id` = :p0';
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
            $obj = new CommonCertificatAgent();
            $obj->hydrate($row);
            CommonCertificatAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCertificatAgent|CommonCertificatAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCertificatAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCertificatAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCertificatAgentPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCertificatAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCertificatAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByCertificat($certificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificat)) {
                $certificat = str_replace('*', '%', $certificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the date_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebut('fooValue');   // WHERE date_debut = 'fooValue'
     * $query->filterByDateDebut('%fooValue%'); // WHERE date_debut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDebut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDebut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDebut)) {
                $dateDebut = str_replace('*', '%', $dateDebut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::DATE_DEBUT, $dateDebut, $comparison);
    }

    /**
     * Filter the query on the date_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFin('fooValue');   // WHERE date_fin = 'fooValue'
     * $query->filterByDateFin('%fooValue%'); // WHERE date_fin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFin)) {
                $dateFin = str_replace('*', '%', $dateFin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::DATE_FIN, $dateFin, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonCertificatAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonCertificatAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonCertificatAgentPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonCertificatAgentPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the statut_revoque column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutRevoque('fooValue');   // WHERE statut_revoque = 'fooValue'
     * $query->filterByStatutRevoque('%fooValue%'); // WHERE statut_revoque LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutRevoque The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByStatutRevoque($statutRevoque = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutRevoque)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutRevoque)) {
                $statutRevoque = str_replace('*', '%', $statutRevoque);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::STATUT_REVOQUE, $statutRevoque, $comparison);
    }

    /**
     * Filter the query on the date_revoquation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRevoquation('fooValue');   // WHERE date_revoquation = 'fooValue'
     * $query->filterByDateRevoquation('%fooValue%'); // WHERE date_revoquation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRevoquation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByDateRevoquation($dateRevoquation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRevoquation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRevoquation)) {
                $dateRevoquation = str_replace('*', '%', $dateRevoquation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::DATE_REVOQUATION, $dateRevoquation, $comparison);
    }

    /**
     * Filter the query on the mail_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByMailAgent('fooValue');   // WHERE mail_agent = 'fooValue'
     * $query->filterByMailAgent('%fooValue%'); // WHERE mail_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mailAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function filterByMailAgent($mailAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mailAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mailAgent)) {
                $mailAgent = str_replace('*', '%', $mailAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatAgentPeer::MAIL_AGENT, $mailAgent, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCertificatAgent $commonCertificatAgent Object to remove from the list of results
     *
     * @return CommonCertificatAgentQuery The current query, for fluid interface
     */
    public function prune($commonCertificatAgent = null)
    {
        if ($commonCertificatAgent) {
            $this->addUsingAlias(CommonCertificatAgentPeer::ID, $commonCertificatAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
