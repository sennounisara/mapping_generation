<?php


/**
 * Base class that represents a query for the 'Inscrit' table.
 *
 * 
 *
 * @method CommonInscritQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInscritQuery orderByEntrepriseId($order = Criteria::ASC) Order by the entreprise_id column
 * @method CommonInscritQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method CommonInscritQuery orderByMdp($order = Criteria::ASC) Order by the mdp column
 * @method CommonInscritQuery orderByNumCert($order = Criteria::ASC) Order by the num_cert column
 * @method CommonInscritQuery orderByCert($order = Criteria::ASC) Order by the cert column
 * @method CommonInscritQuery orderByCivilite($order = Criteria::ASC) Order by the civilite column
 * @method CommonInscritQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonInscritQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonInscritQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonInscritQuery orderByCodepostal($order = Criteria::ASC) Order by the codepostal column
 * @method CommonInscritQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonInscritQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonInscritQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonInscritQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonInscritQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method CommonInscritQuery orderByMotstitreresume($order = Criteria::ASC) Order by the motstitreresume column
 * @method CommonInscritQuery orderByPeriode($order = Criteria::ASC) Order by the periode column
 * @method CommonInscritQuery orderBySiret($order = Criteria::ASC) Order by the siret column
 * @method CommonInscritQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonInscritQuery orderByCodeCpv($order = Criteria::ASC) Order by the code_cpv column
 * @method CommonInscritQuery orderByIdLangue($order = Criteria::ASC) Order by the id_langue column
 * @method CommonInscritQuery orderByProfil($order = Criteria::ASC) Order by the profil column
 * @method CommonInscritQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonInscritQuery orderByBloque($order = Criteria::ASC) Order by the bloque column
 * @method CommonInscritQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonInscritQuery orderByInscritAnnuaireDefense($order = Criteria::ASC) Order by the inscrit_annuaire_defense column
 * @method CommonInscritQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonInscritQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonInscritQuery orderByTentativesMdp($order = Criteria::ASC) Order by the tentatives_mdp column
 * @method CommonInscritQuery orderByUid($order = Criteria::ASC) Order by the uid column
 * @method CommonInscritQuery orderByTentativeRecupMdp($order = Criteria::ASC) Order by the tentative_recup_mdp column
 * @method CommonInscritQuery orderByDateTentativeRecupMdp($order = Criteria::ASC) Order by the date_tentative_recup_mdp column
 *
 * @method CommonInscritQuery groupById() Group by the id column
 * @method CommonInscritQuery groupByEntrepriseId() Group by the entreprise_id column
 * @method CommonInscritQuery groupByLogin() Group by the login column
 * @method CommonInscritQuery groupByMdp() Group by the mdp column
 * @method CommonInscritQuery groupByNumCert() Group by the num_cert column
 * @method CommonInscritQuery groupByCert() Group by the cert column
 * @method CommonInscritQuery groupByCivilite() Group by the civilite column
 * @method CommonInscritQuery groupByNom() Group by the nom column
 * @method CommonInscritQuery groupByPrenom() Group by the prenom column
 * @method CommonInscritQuery groupByAdresse() Group by the adresse column
 * @method CommonInscritQuery groupByCodepostal() Group by the codepostal column
 * @method CommonInscritQuery groupByVille() Group by the ville column
 * @method CommonInscritQuery groupByPays() Group by the pays column
 * @method CommonInscritQuery groupByEmail() Group by the email column
 * @method CommonInscritQuery groupByTelephone() Group by the telephone column
 * @method CommonInscritQuery groupByCategorie() Group by the categorie column
 * @method CommonInscritQuery groupByMotstitreresume() Group by the motstitreresume column
 * @method CommonInscritQuery groupByPeriode() Group by the periode column
 * @method CommonInscritQuery groupBySiret() Group by the siret column
 * @method CommonInscritQuery groupByFax() Group by the fax column
 * @method CommonInscritQuery groupByCodeCpv() Group by the code_cpv column
 * @method CommonInscritQuery groupByIdLangue() Group by the id_langue column
 * @method CommonInscritQuery groupByProfil() Group by the profil column
 * @method CommonInscritQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonInscritQuery groupByBloque() Group by the bloque column
 * @method CommonInscritQuery groupByIdInitial() Group by the id_initial column
 * @method CommonInscritQuery groupByInscritAnnuaireDefense() Group by the inscrit_annuaire_defense column
 * @method CommonInscritQuery groupByDateCreation() Group by the date_creation column
 * @method CommonInscritQuery groupByDateModification() Group by the date_modification column
 * @method CommonInscritQuery groupByTentativesMdp() Group by the tentatives_mdp column
 * @method CommonInscritQuery groupByUid() Group by the uid column
 * @method CommonInscritQuery groupByTentativeRecupMdp() Group by the tentative_recup_mdp column
 * @method CommonInscritQuery groupByDateTentativeRecupMdp() Group by the date_tentative_recup_mdp column
 *
 * @method CommonInscritQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInscritQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInscritQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInscrit findOne(PropelPDO $con = null) Return the first CommonInscrit matching the query
 * @method CommonInscrit findOneOrCreate(PropelPDO $con = null) Return the first CommonInscrit matching the query, or a new CommonInscrit object populated from the query conditions when no match is found
 *
 * @method CommonInscrit findOneById(int $id) Return the first CommonInscrit filtered by the id column
 * @method CommonInscrit findOneByEntrepriseId(int $entreprise_id) Return the first CommonInscrit filtered by the entreprise_id column
 * @method CommonInscrit findOneByLogin(string $login) Return the first CommonInscrit filtered by the login column
 * @method CommonInscrit findOneByMdp(string $mdp) Return the first CommonInscrit filtered by the mdp column
 * @method CommonInscrit findOneByNumCert(string $num_cert) Return the first CommonInscrit filtered by the num_cert column
 * @method CommonInscrit findOneByCert(string $cert) Return the first CommonInscrit filtered by the cert column
 * @method CommonInscrit findOneByCivilite(boolean $civilite) Return the first CommonInscrit filtered by the civilite column
 * @method CommonInscrit findOneByNom(string $nom) Return the first CommonInscrit filtered by the nom column
 * @method CommonInscrit findOneByPrenom(string $prenom) Return the first CommonInscrit filtered by the prenom column
 * @method CommonInscrit findOneByAdresse(string $adresse) Return the first CommonInscrit filtered by the adresse column
 * @method CommonInscrit findOneByCodepostal(string $codepostal) Return the first CommonInscrit filtered by the codepostal column
 * @method CommonInscrit findOneByVille(string $ville) Return the first CommonInscrit filtered by the ville column
 * @method CommonInscrit findOneByPays(string $pays) Return the first CommonInscrit filtered by the pays column
 * @method CommonInscrit findOneByEmail(string $email) Return the first CommonInscrit filtered by the email column
 * @method CommonInscrit findOneByTelephone(string $telephone) Return the first CommonInscrit filtered by the telephone column
 * @method CommonInscrit findOneByCategorie(string $categorie) Return the first CommonInscrit filtered by the categorie column
 * @method CommonInscrit findOneByMotstitreresume(string $motstitreresume) Return the first CommonInscrit filtered by the motstitreresume column
 * @method CommonInscrit findOneByPeriode(int $periode) Return the first CommonInscrit filtered by the periode column
 * @method CommonInscrit findOneBySiret(string $siret) Return the first CommonInscrit filtered by the siret column
 * @method CommonInscrit findOneByFax(string $fax) Return the first CommonInscrit filtered by the fax column
 * @method CommonInscrit findOneByCodeCpv(string $code_cpv) Return the first CommonInscrit filtered by the code_cpv column
 * @method CommonInscrit findOneByIdLangue(int $id_langue) Return the first CommonInscrit filtered by the id_langue column
 * @method CommonInscrit findOneByProfil(int $profil) Return the first CommonInscrit filtered by the profil column
 * @method CommonInscrit findOneByAdresse2(string $adresse2) Return the first CommonInscrit filtered by the adresse2 column
 * @method CommonInscrit findOneByBloque(string $bloque) Return the first CommonInscrit filtered by the bloque column
 * @method CommonInscrit findOneByIdInitial(int $id_initial) Return the first CommonInscrit filtered by the id_initial column
 * @method CommonInscrit findOneByInscritAnnuaireDefense(string $inscrit_annuaire_defense) Return the first CommonInscrit filtered by the inscrit_annuaire_defense column
 * @method CommonInscrit findOneByDateCreation(string $date_creation) Return the first CommonInscrit filtered by the date_creation column
 * @method CommonInscrit findOneByDateModification(string $date_modification) Return the first CommonInscrit filtered by the date_modification column
 * @method CommonInscrit findOneByTentativesMdp(int $tentatives_mdp) Return the first CommonInscrit filtered by the tentatives_mdp column
 * @method CommonInscrit findOneByUid(string $uid) Return the first CommonInscrit filtered by the uid column
 * @method CommonInscrit findOneByTentativeRecupMdp(int $tentative_recup_mdp) Return the first CommonInscrit filtered by the tentative_recup_mdp column
 * @method CommonInscrit findOneByDateTentativeRecupMdp(string $date_tentative_recup_mdp) Return the first CommonInscrit filtered by the date_tentative_recup_mdp column
 *
 * @method array findById(int $id) Return CommonInscrit objects filtered by the id column
 * @method array findByEntrepriseId(int $entreprise_id) Return CommonInscrit objects filtered by the entreprise_id column
 * @method array findByLogin(string $login) Return CommonInscrit objects filtered by the login column
 * @method array findByMdp(string $mdp) Return CommonInscrit objects filtered by the mdp column
 * @method array findByNumCert(string $num_cert) Return CommonInscrit objects filtered by the num_cert column
 * @method array findByCert(string $cert) Return CommonInscrit objects filtered by the cert column
 * @method array findByCivilite(boolean $civilite) Return CommonInscrit objects filtered by the civilite column
 * @method array findByNom(string $nom) Return CommonInscrit objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonInscrit objects filtered by the prenom column
 * @method array findByAdresse(string $adresse) Return CommonInscrit objects filtered by the adresse column
 * @method array findByCodepostal(string $codepostal) Return CommonInscrit objects filtered by the codepostal column
 * @method array findByVille(string $ville) Return CommonInscrit objects filtered by the ville column
 * @method array findByPays(string $pays) Return CommonInscrit objects filtered by the pays column
 * @method array findByEmail(string $email) Return CommonInscrit objects filtered by the email column
 * @method array findByTelephone(string $telephone) Return CommonInscrit objects filtered by the telephone column
 * @method array findByCategorie(string $categorie) Return CommonInscrit objects filtered by the categorie column
 * @method array findByMotstitreresume(string $motstitreresume) Return CommonInscrit objects filtered by the motstitreresume column
 * @method array findByPeriode(int $periode) Return CommonInscrit objects filtered by the periode column
 * @method array findBySiret(string $siret) Return CommonInscrit objects filtered by the siret column
 * @method array findByFax(string $fax) Return CommonInscrit objects filtered by the fax column
 * @method array findByCodeCpv(string $code_cpv) Return CommonInscrit objects filtered by the code_cpv column
 * @method array findByIdLangue(int $id_langue) Return CommonInscrit objects filtered by the id_langue column
 * @method array findByProfil(int $profil) Return CommonInscrit objects filtered by the profil column
 * @method array findByAdresse2(string $adresse2) Return CommonInscrit objects filtered by the adresse2 column
 * @method array findByBloque(string $bloque) Return CommonInscrit objects filtered by the bloque column
 * @method array findByIdInitial(int $id_initial) Return CommonInscrit objects filtered by the id_initial column
 * @method array findByInscritAnnuaireDefense(string $inscrit_annuaire_defense) Return CommonInscrit objects filtered by the inscrit_annuaire_defense column
 * @method array findByDateCreation(string $date_creation) Return CommonInscrit objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonInscrit objects filtered by the date_modification column
 * @method array findByTentativesMdp(int $tentatives_mdp) Return CommonInscrit objects filtered by the tentatives_mdp column
 * @method array findByUid(string $uid) Return CommonInscrit objects filtered by the uid column
 * @method array findByTentativeRecupMdp(int $tentative_recup_mdp) Return CommonInscrit objects filtered by the tentative_recup_mdp column
 * @method array findByDateTentativeRecupMdp(string $date_tentative_recup_mdp) Return CommonInscrit objects filtered by the date_tentative_recup_mdp column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInscritQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInscritQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInscrit', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInscritQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInscritQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInscritQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInscritQuery) {
            return $criteria;
        }
        $query = new CommonInscritQuery();
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
                         A Primary key composition: [$id, $entreprise_id]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonInscrit|CommonInscrit[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInscritPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInscrit A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `entreprise_id`, `login`, `mdp`, `num_cert`, `cert`, `civilite`, `nom`, `prenom`, `adresse`, `codepostal`, `ville`, `pays`, `email`, `telephone`, `categorie`, `motstitreresume`, `periode`, `siret`, `fax`, `code_cpv`, `id_langue`, `profil`, `adresse2`, `bloque`, `id_initial`, `inscrit_annuaire_defense`, `date_creation`, `date_modification`, `tentatives_mdp`, `uid`, `tentative_recup_mdp`, `date_tentative_recup_mdp` FROM `Inscrit` WHERE `id` = :p0 AND `entreprise_id` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonInscrit();
            $obj->hydrate($row);
            CommonInscritPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonInscrit|CommonInscrit[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInscrit[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonInscritPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonInscritPeer::ENTREPRISE_ID, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonInscritPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonInscritPeer::ENTREPRISE_ID, $key[1], Criteria::EQUAL);
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
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInscritPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInscritPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the entreprise_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseId(1234); // WHERE entreprise_id = 1234
     * $query->filterByEntrepriseId(array(12, 34)); // WHERE entreprise_id IN (12, 34)
     * $query->filterByEntrepriseId(array('min' => 12)); // WHERE entreprise_id >= 12
     * $query->filterByEntrepriseId(array('max' => 12)); // WHERE entreprise_id <= 12
     * </code>
     *
     * @param     mixed $entrepriseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByEntrepriseId($entrepriseId = null, $comparison = null)
    {
        if (is_array($entrepriseId)) {
            $useMinMax = false;
            if (isset($entrepriseId['min'])) {
                $this->addUsingAlias(CommonInscritPeer::ENTREPRISE_ID, $entrepriseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entrepriseId['max'])) {
                $this->addUsingAlias(CommonInscritPeer::ENTREPRISE_ID, $entrepriseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::ENTREPRISE_ID, $entrepriseId, $comparison);
    }

    /**
     * Filter the query on the login column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE login = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByMdp('fooValue');   // WHERE mdp = 'fooValue'
     * $query->filterByMdp('%fooValue%'); // WHERE mdp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mdp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByMdp($mdp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mdp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mdp)) {
                $mdp = str_replace('*', '%', $mdp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::MDP, $mdp, $comparison);
    }

    /**
     * Filter the query on the num_cert column
     *
     * Example usage:
     * <code>
     * $query->filterByNumCert('fooValue');   // WHERE num_cert = 'fooValue'
     * $query->filterByNumCert('%fooValue%'); // WHERE num_cert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numCert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByNumCert($numCert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numCert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numCert)) {
                $numCert = str_replace('*', '%', $numCert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::NUM_CERT, $numCert, $comparison);
    }

    /**
     * Filter the query on the cert column
     *
     * Example usage:
     * <code>
     * $query->filterByCert('fooValue');   // WHERE cert = 'fooValue'
     * $query->filterByCert('%fooValue%'); // WHERE cert LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByCert($cert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cert)) {
                $cert = str_replace('*', '%', $cert);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::CERT, $cert, $comparison);
    }

    /**
     * Filter the query on the civilite column
     *
     * Example usage:
     * <code>
     * $query->filterByCivilite(true); // WHERE civilite = true
     * $query->filterByCivilite('yes'); // WHERE civilite = true
     * </code>
     *
     * @param     boolean|string $civilite The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByCivilite($civilite = null, $comparison = null)
    {
        if (is_string($civilite)) {
            $civilite = in_array(strtolower($civilite), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonInscritPeer::CIVILITE, $civilite, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the codepostal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostal('fooValue');   // WHERE codepostal = 'fooValue'
     * $query->filterByCodepostal('%fooValue%'); // WHERE codepostal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByCodepostal($codepostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostal)) {
                $codepostal = str_replace('*', '%', $codepostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::CODEPOSTAL, $codepostal, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie('fooValue');   // WHERE categorie = 'fooValue'
     * $query->filterByCategorie('%fooValue%'); // WHERE categorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categorie)) {
                $categorie = str_replace('*', '%', $categorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the motstitreresume column
     *
     * Example usage:
     * <code>
     * $query->filterByMotstitreresume('fooValue');   // WHERE motstitreresume = 'fooValue'
     * $query->filterByMotstitreresume('%fooValue%'); // WHERE motstitreresume LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motstitreresume The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByMotstitreresume($motstitreresume = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motstitreresume)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motstitreresume)) {
                $motstitreresume = str_replace('*', '%', $motstitreresume);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::MOTSTITRERESUME, $motstitreresume, $comparison);
    }

    /**
     * Filter the query on the periode column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriode(1234); // WHERE periode = 1234
     * $query->filterByPeriode(array(12, 34)); // WHERE periode IN (12, 34)
     * $query->filterByPeriode(array('min' => 12)); // WHERE periode >= 12
     * $query->filterByPeriode(array('max' => 12)); // WHERE periode <= 12
     * </code>
     *
     * @param     mixed $periode The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByPeriode($periode = null, $comparison = null)
    {
        if (is_array($periode)) {
            $useMinMax = false;
            if (isset($periode['min'])) {
                $this->addUsingAlias(CommonInscritPeer::PERIODE, $periode['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($periode['max'])) {
                $this->addUsingAlias(CommonInscritPeer::PERIODE, $periode['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::PERIODE, $periode, $comparison);
    }

    /**
     * Filter the query on the siret column
     *
     * Example usage:
     * <code>
     * $query->filterBySiret('fooValue');   // WHERE siret = 'fooValue'
     * $query->filterBySiret('%fooValue%'); // WHERE siret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterBySiret($siret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siret)) {
                $siret = str_replace('*', '%', $siret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::SIRET, $siret, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the code_cpv column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv('fooValue');   // WHERE code_cpv = 'fooValue'
     * $query->filterByCodeCpv('%fooValue%'); // WHERE code_cpv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByCodeCpv($codeCpv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv)) {
                $codeCpv = str_replace('*', '%', $codeCpv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::CODE_CPV, $codeCpv, $comparison);
    }

    /**
     * Filter the query on the id_langue column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLangue(1234); // WHERE id_langue = 1234
     * $query->filterByIdLangue(array(12, 34)); // WHERE id_langue IN (12, 34)
     * $query->filterByIdLangue(array('min' => 12)); // WHERE id_langue >= 12
     * $query->filterByIdLangue(array('max' => 12)); // WHERE id_langue <= 12
     * </code>
     *
     * @param     mixed $idLangue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByIdLangue($idLangue = null, $comparison = null)
    {
        if (is_array($idLangue)) {
            $useMinMax = false;
            if (isset($idLangue['min'])) {
                $this->addUsingAlias(CommonInscritPeer::ID_LANGUE, $idLangue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLangue['max'])) {
                $this->addUsingAlias(CommonInscritPeer::ID_LANGUE, $idLangue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::ID_LANGUE, $idLangue, $comparison);
    }

    /**
     * Filter the query on the profil column
     *
     * Example usage:
     * <code>
     * $query->filterByProfil(1234); // WHERE profil = 1234
     * $query->filterByProfil(array(12, 34)); // WHERE profil IN (12, 34)
     * $query->filterByProfil(array('min' => 12)); // WHERE profil >= 12
     * $query->filterByProfil(array('max' => 12)); // WHERE profil <= 12
     * </code>
     *
     * @param     mixed $profil The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByProfil($profil = null, $comparison = null)
    {
        if (is_array($profil)) {
            $useMinMax = false;
            if (isset($profil['min'])) {
                $this->addUsingAlias(CommonInscritPeer::PROFIL, $profil['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($profil['max'])) {
                $this->addUsingAlias(CommonInscritPeer::PROFIL, $profil['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::PROFIL, $profil, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the bloque column
     *
     * Example usage:
     * <code>
     * $query->filterByBloque('fooValue');   // WHERE bloque = 'fooValue'
     * $query->filterByBloque('%fooValue%'); // WHERE bloque LIKE '%fooValue%'
     * </code>
     *
     * @param     string $bloque The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByBloque($bloque = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($bloque)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $bloque)) {
                $bloque = str_replace('*', '%', $bloque);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::BLOQUE, $bloque, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonInscritPeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonInscritPeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the inscrit_annuaire_defense column
     *
     * Example usage:
     * <code>
     * $query->filterByInscritAnnuaireDefense('fooValue');   // WHERE inscrit_annuaire_defense = 'fooValue'
     * $query->filterByInscritAnnuaireDefense('%fooValue%'); // WHERE inscrit_annuaire_defense LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inscritAnnuaireDefense The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByInscritAnnuaireDefense($inscritAnnuaireDefense = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inscritAnnuaireDefense)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inscritAnnuaireDefense)) {
                $inscritAnnuaireDefense = str_replace('*', '%', $inscritAnnuaireDefense);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE, $inscritAnnuaireDefense, $comparison);
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
     * @return CommonInscritQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritPeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonInscritQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonInscritPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the tentatives_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativesMdp(1234); // WHERE tentatives_mdp = 1234
     * $query->filterByTentativesMdp(array(12, 34)); // WHERE tentatives_mdp IN (12, 34)
     * $query->filterByTentativesMdp(array('min' => 12)); // WHERE tentatives_mdp >= 12
     * $query->filterByTentativesMdp(array('max' => 12)); // WHERE tentatives_mdp <= 12
     * </code>
     *
     * @param     mixed $tentativesMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByTentativesMdp($tentativesMdp = null, $comparison = null)
    {
        if (is_array($tentativesMdp)) {
            $useMinMax = false;
            if (isset($tentativesMdp['min'])) {
                $this->addUsingAlias(CommonInscritPeer::TENTATIVES_MDP, $tentativesMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativesMdp['max'])) {
                $this->addUsingAlias(CommonInscritPeer::TENTATIVES_MDP, $tentativesMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::TENTATIVES_MDP, $tentativesMdp, $comparison);
    }

    /**
     * Filter the query on the uid column
     *
     * Example usage:
     * <code>
     * $query->filterByUid('fooValue');   // WHERE uid = 'fooValue'
     * $query->filterByUid('%fooValue%'); // WHERE uid LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByUid($uid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uid)) {
                $uid = str_replace('*', '%', $uid);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::UID, $uid, $comparison);
    }

    /**
     * Filter the query on the tentative_recup_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativeRecupMdp(1234); // WHERE tentative_recup_mdp = 1234
     * $query->filterByTentativeRecupMdp(array(12, 34)); // WHERE tentative_recup_mdp IN (12, 34)
     * $query->filterByTentativeRecupMdp(array('min' => 12)); // WHERE tentative_recup_mdp >= 12
     * $query->filterByTentativeRecupMdp(array('max' => 12)); // WHERE tentative_recup_mdp <= 12
     * </code>
     *
     * @param     mixed $tentativeRecupMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByTentativeRecupMdp($tentativeRecupMdp = null, $comparison = null)
    {
        if (is_array($tentativeRecupMdp)) {
            $useMinMax = false;
            if (isset($tentativeRecupMdp['min'])) {
                $this->addUsingAlias(CommonInscritPeer::TENTATIVE_RECUP_MDP, $tentativeRecupMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativeRecupMdp['max'])) {
                $this->addUsingAlias(CommonInscritPeer::TENTATIVE_RECUP_MDP, $tentativeRecupMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::TENTATIVE_RECUP_MDP, $tentativeRecupMdp, $comparison);
    }

    /**
     * Filter the query on the date_tentative_recup_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTentativeRecupMdp('2011-03-14'); // WHERE date_tentative_recup_mdp = '2011-03-14'
     * $query->filterByDateTentativeRecupMdp('now'); // WHERE date_tentative_recup_mdp = '2011-03-14'
     * $query->filterByDateTentativeRecupMdp(array('max' => 'yesterday')); // WHERE date_tentative_recup_mdp > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateTentativeRecupMdp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function filterByDateTentativeRecupMdp($dateTentativeRecupMdp = null, $comparison = null)
    {
        if (is_array($dateTentativeRecupMdp)) {
            $useMinMax = false;
            if (isset($dateTentativeRecupMdp['min'])) {
                $this->addUsingAlias(CommonInscritPeer::DATE_TENTATIVE_RECUP_MDP, $dateTentativeRecupMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateTentativeRecupMdp['max'])) {
                $this->addUsingAlias(CommonInscritPeer::DATE_TENTATIVE_RECUP_MDP, $dateTentativeRecupMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritPeer::DATE_TENTATIVE_RECUP_MDP, $dateTentativeRecupMdp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInscrit $commonInscrit Object to remove from the list of results
     *
     * @return CommonInscritQuery The current query, for fluid interface
     */
    public function prune($commonInscrit = null)
    {
        if ($commonInscrit) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonInscritPeer::ID), $commonInscrit->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonInscritPeer::ENTREPRISE_ID), $commonInscrit->getEntrepriseId(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
