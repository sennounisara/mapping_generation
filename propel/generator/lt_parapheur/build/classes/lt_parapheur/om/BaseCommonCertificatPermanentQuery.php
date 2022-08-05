<?php


/**
 * Base class that represents a query for the 'CertificatPermanent' table.
 *
 * 
 *
 * @method CommonCertificatPermanentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCertificatPermanentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCertificatPermanentQuery orderByTitre($order = Criteria::ASC) Order by the Titre column
 * @method CommonCertificatPermanentQuery orderByPrenom($order = Criteria::ASC) Order by the Prenom column
 * @method CommonCertificatPermanentQuery orderByNom($order = Criteria::ASC) Order by the Nom column
 * @method CommonCertificatPermanentQuery orderByEmail($order = Criteria::ASC) Order by the EMail column
 * @method CommonCertificatPermanentQuery orderByCertificat($order = Criteria::ASC) Order by the Certificat column
 * @method CommonCertificatPermanentQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonCertificatPermanentQuery orderByMasterKey($order = Criteria::ASC) Order by the master_key column
 * @method CommonCertificatPermanentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonCertificatPermanentQuery orderByCsp($order = Criteria::ASC) Order by the CSP column
 * @method CommonCertificatPermanentQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonCertificatPermanentQuery orderByCertificatUniverselle($order = Criteria::ASC) Order by the certificat_universelle column
 * @method CommonCertificatPermanentQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 *
 * @method CommonCertificatPermanentQuery groupById() Group by the id column
 * @method CommonCertificatPermanentQuery groupByOrganisme() Group by the organisme column
 * @method CommonCertificatPermanentQuery groupByTitre() Group by the Titre column
 * @method CommonCertificatPermanentQuery groupByPrenom() Group by the Prenom column
 * @method CommonCertificatPermanentQuery groupByNom() Group by the Nom column
 * @method CommonCertificatPermanentQuery groupByEmail() Group by the EMail column
 * @method CommonCertificatPermanentQuery groupByCertificat() Group by the Certificat column
 * @method CommonCertificatPermanentQuery groupByServiceId() Group by the service_id column
 * @method CommonCertificatPermanentQuery groupByMasterKey() Group by the master_key column
 * @method CommonCertificatPermanentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonCertificatPermanentQuery groupByCsp() Group by the CSP column
 * @method CommonCertificatPermanentQuery groupByDateModification() Group by the date_modification column
 * @method CommonCertificatPermanentQuery groupByCertificatUniverselle() Group by the certificat_universelle column
 * @method CommonCertificatPermanentQuery groupByVisible() Group by the visible column
 *
 * @method CommonCertificatPermanentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCertificatPermanentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCertificatPermanentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCertificatPermanent findOne(PropelPDO $con = null) Return the first CommonCertificatPermanent matching the query
 * @method CommonCertificatPermanent findOneOrCreate(PropelPDO $con = null) Return the first CommonCertificatPermanent matching the query, or a new CommonCertificatPermanent object populated from the query conditions when no match is found
 *
 * @method CommonCertificatPermanent findOneById(int $id) Return the first CommonCertificatPermanent filtered by the id column
 * @method CommonCertificatPermanent findOneByOrganisme(string $organisme) Return the first CommonCertificatPermanent filtered by the organisme column
 * @method CommonCertificatPermanent findOneByTitre(string $Titre) Return the first CommonCertificatPermanent filtered by the Titre column
 * @method CommonCertificatPermanent findOneByPrenom(string $Prenom) Return the first CommonCertificatPermanent filtered by the Prenom column
 * @method CommonCertificatPermanent findOneByNom(string $Nom) Return the first CommonCertificatPermanent filtered by the Nom column
 * @method CommonCertificatPermanent findOneByEmail(string $EMail) Return the first CommonCertificatPermanent filtered by the EMail column
 * @method CommonCertificatPermanent findOneByCertificat(string $Certificat) Return the first CommonCertificatPermanent filtered by the Certificat column
 * @method CommonCertificatPermanent findOneByServiceId(int $service_id) Return the first CommonCertificatPermanent filtered by the service_id column
 * @method CommonCertificatPermanent findOneByMasterKey(string $master_key) Return the first CommonCertificatPermanent filtered by the master_key column
 * @method CommonCertificatPermanent findOneByIdAgent(int $id_agent) Return the first CommonCertificatPermanent filtered by the id_agent column
 * @method CommonCertificatPermanent findOneByCsp(string $CSP) Return the first CommonCertificatPermanent filtered by the CSP column
 * @method CommonCertificatPermanent findOneByDateModification(string $date_modification) Return the first CommonCertificatPermanent filtered by the date_modification column
 * @method CommonCertificatPermanent findOneByCertificatUniverselle(string $certificat_universelle) Return the first CommonCertificatPermanent filtered by the certificat_universelle column
 * @method CommonCertificatPermanent findOneByVisible(string $visible) Return the first CommonCertificatPermanent filtered by the visible column
 *
 * @method array findById(int $id) Return CommonCertificatPermanent objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonCertificatPermanent objects filtered by the organisme column
 * @method array findByTitre(string $Titre) Return CommonCertificatPermanent objects filtered by the Titre column
 * @method array findByPrenom(string $Prenom) Return CommonCertificatPermanent objects filtered by the Prenom column
 * @method array findByNom(string $Nom) Return CommonCertificatPermanent objects filtered by the Nom column
 * @method array findByEmail(string $EMail) Return CommonCertificatPermanent objects filtered by the EMail column
 * @method array findByCertificat(string $Certificat) Return CommonCertificatPermanent objects filtered by the Certificat column
 * @method array findByServiceId(int $service_id) Return CommonCertificatPermanent objects filtered by the service_id column
 * @method array findByMasterKey(string $master_key) Return CommonCertificatPermanent objects filtered by the master_key column
 * @method array findByIdAgent(int $id_agent) Return CommonCertificatPermanent objects filtered by the id_agent column
 * @method array findByCsp(string $CSP) Return CommonCertificatPermanent objects filtered by the CSP column
 * @method array findByDateModification(string $date_modification) Return CommonCertificatPermanent objects filtered by the date_modification column
 * @method array findByCertificatUniverselle(string $certificat_universelle) Return CommonCertificatPermanent objects filtered by the certificat_universelle column
 * @method array findByVisible(string $visible) Return CommonCertificatPermanent objects filtered by the visible column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCertificatPermanentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCertificatPermanentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCertificatPermanent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCertificatPermanentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCertificatPermanentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCertificatPermanentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCertificatPermanentQuery) {
            return $criteria;
        }
        $query = new CommonCertificatPermanentQuery();
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
     * @return   CommonCertificatPermanent|CommonCertificatPermanent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCertificatPermanentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatPermanentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatPermanent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `Titre`, `Prenom`, `Nom`, `EMail`, `Certificat`, `service_id`, `master_key`, `id_agent`, `CSP`, `date_modification`, `certificat_universelle`, `visible` FROM `CertificatPermanent` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonCertificatPermanent();
            $obj->hydrate($row);
            CommonCertificatPermanentPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonCertificatPermanent|CommonCertificatPermanent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCertificatPermanent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonCertificatPermanentPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonCertificatPermanentPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonCertificatPermanentPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonCertificatPermanentPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCertificatPermanentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCertificatPermanentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::ID, $id, $comparison);
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
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCertificatPermanentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the Titre column
     *
     * Example usage:
     * <code>
     * $query->filterByTitre('fooValue');   // WHERE Titre = 'fooValue'
     * $query->filterByTitre('%fooValue%'); // WHERE Titre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByTitre($titre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titre)) {
                $titre = str_replace('*', '%', $titre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::TITRE, $titre, $comparison);
    }

    /**
     * Filter the query on the Prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE Prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE Prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the Nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE Nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE Nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the EMail column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE EMail = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE EMail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the Certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE Certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE Certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCertificatPermanentPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the service_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceId(1234); // WHERE service_id = 1234
     * $query->filterByServiceId(array(12, 34)); // WHERE service_id IN (12, 34)
     * $query->filterByServiceId(array('min' => 12)); // WHERE service_id >= 12
     * $query->filterByServiceId(array('max' => 12)); // WHERE service_id <= 12
     * </code>
     *
     * @param     mixed $serviceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonCertificatPermanentPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonCertificatPermanentPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the master_key column
     *
     * Example usage:
     * <code>
     * $query->filterByMasterKey('fooValue');   // WHERE master_key = 'fooValue'
     * $query->filterByMasterKey('%fooValue%'); // WHERE master_key LIKE '%fooValue%'
     * </code>
     *
     * @param     string $masterKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByMasterKey($masterKey = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($masterKey)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $masterKey)) {
                $masterKey = str_replace('*', '%', $masterKey);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::MASTER_KEY, $masterKey, $comparison);
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
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonCertificatPermanentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonCertificatPermanentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the CSP column
     *
     * Example usage:
     * <code>
     * $query->filterByCsp('fooValue');   // WHERE CSP = 'fooValue'
     * $query->filterByCsp('%fooValue%'); // WHERE CSP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $csp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByCsp($csp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($csp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $csp)) {
                $csp = str_replace('*', '%', $csp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::CSP, $csp, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the certificat_universelle column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificatUniverselle('fooValue');   // WHERE certificat_universelle = 'fooValue'
     * $query->filterByCertificatUniverselle('%fooValue%'); // WHERE certificat_universelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificatUniverselle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByCertificatUniverselle($certificatUniverselle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificatUniverselle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificatUniverselle)) {
                $certificatUniverselle = str_replace('*', '%', $certificatUniverselle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::CERTIFICAT_UNIVERSELLE, $certificatUniverselle, $comparison);
    }

    /**
     * Filter the query on the visible column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible('fooValue');   // WHERE visible = 'fooValue'
     * $query->filterByVisible('%fooValue%'); // WHERE visible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function filterByVisible($visible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible)) {
                $visible = str_replace('*', '%', $visible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatPermanentPeer::VISIBLE, $visible, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCertificatPermanent $commonCertificatPermanent Object to remove from the list of results
     *
     * @return CommonCertificatPermanentQuery The current query, for fluid interface
     */
    public function prune($commonCertificatPermanent = null)
    {
        if ($commonCertificatPermanent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonCertificatPermanentPeer::ID), $commonCertificatPermanent->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonCertificatPermanentPeer::ORGANISME), $commonCertificatPermanent->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
